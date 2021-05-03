<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateConfigGeral;
use App\Models\ConfigGeral;
use Illuminate\Http\Request;

// Controller do CRUD dos Contatos na Home Page

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

        $config_geral->update($request->all());

        return redirect()
            ->route('listar.contato')
            ->with('message', 'Atualizado com sucesso');
    }
}
