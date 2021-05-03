<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateContatos;
use App\Models\Contato;
use Illuminate\Http\Request;

// Controller do CRUD dos Contatos na Home Page

class ContatoController extends Controller
{
    public function listar_contato()
    {
        $contatos = Contato::get();
        return view('admin.contato.index', compact('contatos'));
    }

    public function editar_contato($id)
    {
        $contatos = Contato::find($id);
        return view('admin.contato.edit', compact('contatos'));
    }

    public function update_contato(StoreUpdateContatos $request, $id)
    {

        if (!$contatos = Contato::find($id)) {
            return redirect()->back();
        }

        $contatos->update($request->all());

        return redirect()
            ->route('listar.contato')
            ->with('message', 'Atualizado com sucesso');
    }
}
