<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateMenu;

// Controller dos CRUD do Menu Principal

class MenuController extends Controller
{
    public function listar_menu()
    {
        $menus = Menu::get();
        return view('admin.menusite.index', compact('menus'));
    }

    public function editar_menu($id)
    {
        $menus = Menu::find($id);
        return view('admin.menusite.edit', compact('menus'));
    }

    public function update_menu(StoreUpdateMenu $request, $id)
    {

        if (!$menus = Menu::find($id)) {
            return redirect()->back();
        }

        $menus->update($request->all());

        return redirect()
            ->route('listar.menu')
            ->with('message', 'Atualizado com sucesso');
    }

}
