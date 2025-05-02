<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorizadoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/motorizado/{motorizado}/ubicacion', [MotorizadoController::class, 'updateUbicacion']);

Route::resource('pedidos', PedidoController::class)
     ->only(['index','create','store','destroy']);

Route::post('pedidos/{pedido}/entregar', [PedidoController::class, 'entregar'])
     ->name('pedidos.entregar');
