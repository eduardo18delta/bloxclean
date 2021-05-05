<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateItens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Itens;

// Controller do CRUD de itens

class ItensController extends Controller
{
    public function listar_itens()
    {
        $itens = Itens::all();
        return view('admin.itens.index', compact('itens'));
        
    }

    public function editar_itens($id)
    {
        $itens = Itens::find($id);
        return view('admin.itens.edit', compact('itens'));
    }

    public function update_itens(StoreUpdateitens $request, $id)
    {

        if (!$itens = Itens::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->icone->isValid())
            if (Storage::exists($itens->icone))
                Storage::delete($itens->icone);


        $nameFile = Str::of($request->titulo_icone)->slug('-') . '.' . $request->icone->getClientOriginalExtension();

        $image = $request->icone->storeAs('itens', $nameFile);
        $data['icone'] = $image;

        $itens->update($data);
  
        return redirect()
            ->route('listar.itens')
            ->with('message', 'Ícone Atualizado com sucesso');                  
    }
}
