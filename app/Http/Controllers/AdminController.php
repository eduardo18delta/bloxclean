<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Controller da Área Administrativa

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function personalizar()
    {
        return view('admin.personalizar.index');
    }

    public function listar_perfil()
    {
        return view('admin.perfil.index');
    }

}
