<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUsers;
use Illuminate\Http\Request;
use App\Models\User;

// Controller do CRUD de Usuários

class UsersController extends Controller
{
    public function listar_usuarios()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function editar_usuarios($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update_usuarios(StoreUpdateUsers $request, $id)
    {

        if (!$users = User::find($id)) {
            return redirect()->back();
        }

        $users->update($request->all());

        return redirect()
            ->route('listar.usuarios')
            ->with('message', 'Usuário atualizado com sucesso');
    }
}
