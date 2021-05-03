<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

// Rota da HomePage do site BoxClean
Route::get('/' , [HomePageController::class, 'index']);


