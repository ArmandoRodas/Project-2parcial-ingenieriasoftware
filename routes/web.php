<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MotorizadoController;
use App\Http\Controllers\PedidoController;

Route::post('/motorizado/{motorizado}/ubicacion', [MotorizadoController::class, 'updateUbicacion']);
Route::resource('pedidos', PedidoController::class)->only(['index','create','store']);

//Route::post('/motorizado/{motorizado}/ubicacion', [MotorizadoController::class, 'updateUbicacion']);
//Route::resource('pedidos', PedidoController::class)->only(['create', 'store', 'index']);
