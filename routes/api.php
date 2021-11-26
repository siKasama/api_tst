<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcessoController;



Route::get('acesso/{user}', [AcessoController::class, 'show']);
Route::post('login', [AcessoController::class, 'store']);
