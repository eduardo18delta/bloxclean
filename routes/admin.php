<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerContatoController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\ConfigGeralController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;


// Rotas da Área Administrativa
Route::get('/admin' , [AdminController::class , 'index']);
Route::get('/personalizar'  , [AdminController::class , 'personalizar' ]);
Route::get('/admin/perfil' , [AdminController::class , 'listar_perfil']);

// Rotas de CRUD informações do Banner de Contato
Route::get('/admin/banner/listar' , [BannerContatoController::class , 'listar_banner'])->name('listar.banner');
Route::get('/admin/banner/editar/{id}' , [BannerContatoController::class , 'editar_banner'])->name('editar.banner');
Route::put('/admin/banner/atualizar/{id}' , [BannerContatoController::class , 'update_banner'])->name('update.banner');

// Rotas de CRUD informações de contato menu 
Route::get('/admin/config_geral/listar' , [ConfigGeralController::class , 'listar_contato'])->name('listar.geral');
Route::get('/admin/config_geral/editar/{id}' , [ConfigGeralController::class , 'editar_contato'])->name('editar.geral');
Route::put('/admin/config_geral/atualizar/{id}' , [ConfigGeralController::class , 'update_contato'])->name('update.geral');

// Rotas de CRUD informações do MENU 
Route::get('/admin/menu/listar' , [MenuController::class , 'listar_menu'])->name('listar.menu');
Route::get('/admin/menu/editar/{id}' , [MenuController::class , 'editar_menu'])->name('editar.menu');
Route::put('/admin/menu/atualizar/{id}' , [MenuController::class , 'update_menu'])->name('update.menu');

// Rotas de CRUD dos USERS 
Route::get('/admin/users/listar' , [UsersController::class , 'listar_usuarios'])->name('listar.usuarios');
Route::get('/admin/user/editar/{id}' , [UsersController::class , 'editar_usuarios'])->name('editar.usuarios');
Route::put('/admin/user/atualizar/{id}' , [UsersController::class , 'update_usuarios'])->name('update.usuarios');

// Rotas de CRUD dos SERVIÇOS
Route::get('/admin/servicos/listar' , [ServicosController::class , 'listar_servicos'])->name('listar.servicos');
Route::get('/admin/servicos/editar/{id}' , [ServicosController::class , 'editar_servicos'])->name('editar.servicos');
Route::put('/admin/servicos/atualizar/{id}' , [ServicosController::class , 'update_servicos'])->name('update.servicos');

// Rotas de CRUD dos ITENS
Route::get('/admin/itens/listar' , [ItensController::class , 'listar_itens'])->name('listar.itens');
Route::get('/admin/itens/editar/{id}' , [ItensController::class , 'editar_itens'])->name('editar.itens');
Route::put('/admin/itens/atualizar/{id}' , [ItensController::class , 'update_itens'])->name('update.itens');






