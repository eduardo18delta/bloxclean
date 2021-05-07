<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateConfigGeral;
use App\Models\ConfigGeral;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Controller do CRUD dos Contatos na Home Page tste

class ConfigGeralController extends Controller
{
    public function listar_contato()
    {
        $config_gerais = ConfigGeral::get();
        return view('admin.config_geral.index', compact('config_gerais'));
    }

    public function editar_contato($id)
    {
        $config_geral = ConfigGeral::find($id);
        return view('admin.config_geral.edit', compact('config_geral'));
    }

    public function update_contato(StoreUpdateConfigGeral $request, $id)
    {

        if (!$config_geral = ConfigGeral::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->logo->isValid())
            if (Storage::exists($config_geral->logo))
                Storage::delete($config_geral->logo);

        $nameFile = Str::of("logo")->slug('-') . '.' . $request->logo->getClientOriginalExtension();        

        $image = $request->logo->storeAs('logo', $nameFile);
        $data['logo'] = $image;

        $config_geral->update($data);

        return redirect()
            ->route('listar.geral')
            ->with('message', 'Atualizado com sucesso');                  
    }
}
