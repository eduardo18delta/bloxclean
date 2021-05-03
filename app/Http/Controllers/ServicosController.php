<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateServicos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Servico;

// Controller do CRUD de Serviços

class ServicosController extends Controller
{
    
    public function listar_servicos()
    {
        $servicos = Servico::get();
        return view('admin.servicos.index', compact('servicos'));
    }


    public function editar_servicos($id)
    {
        $servicos = Servico::find($id);
        return view('admin.servicos.edit', compact('servicos'));
    }

    public function update_servicos(StoreUpdateServicos $request, $id)
    {

        if (!$servicos = Servico::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->image->isValid())
            if (Storage::exists($servicos->image))
                Storage::delete($servicos->image);


        $nameFile = Str::of($request->titulo_item)->slug('-') . '.' . $request->image->getClientOriginalExtension();

        $image = $request->image->storeAs('servicos', $nameFile);
        $data['image'] = $image;

        $servicos->update($data);
  
        return redirect()
            ->route('listar.servicos')
            ->with('message', 'Serviço Atualizado com sucesso');                  
    }

    
}
