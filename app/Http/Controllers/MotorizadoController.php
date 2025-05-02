<?php

namespace App\Http\Controllers;
use App\Models\Motorizado;

use Illuminate\Http\Request;

class MotorizadoController extends Controller
{
    public function updateUbicacion(Request $request, Motorizado $motorizado)
    {
    $request->validate([
        'lat' => 'required|numeric',
        'lng' => 'required|numeric',
    ]);

    // Actualiza solo los campos lat y lng
    $motorizado->update($request->only('lat', 'lng'));

    return response()->json(['status' => 'ok']);
    }
    
}
