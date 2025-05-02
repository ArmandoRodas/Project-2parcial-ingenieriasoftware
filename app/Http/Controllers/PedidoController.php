<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Motorizado;
use App\Models\Comunidad; 

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    
    public function index()
    {
        // Carga cada pedido con su motorizado asignado
        $pedidos = Pedido::with('motorizado')
                         ->latest()
                         ->paginate(10);

        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Muestra el formulario para crear un nuevo pedido.
     */
    public function create()
    {
        $comunidades = Comunidad::orderBy('nombre')->get();
        return view('pedidos.create', compact('comunidades'));
    }

    /**
     * Recibe lat/lng del cliente, calcula el motorizado más cercano
     * usando la fórmula de Haversine, crea el pedido y lo asigna.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'comunidad_id' => 'required|exists:comunidades,id',
            'tipo'         => 'required|string|in:Sencilla,Doble,Triple,Veggie,Especial',
        ]);
    
        $com = Comunidad::findOrFail($data['comunidad_id']);
    
        // Coordenadas del parque central
        $lat0 = 14.60;
        $lng0 = -89.31;
    
        // Selecciona al motorizado cuyo |distancia_a_central - dist_comunidad| sea mínima
        $motorizado = Motorizado::selectRaw("
            id, nombre, lat, lng,
            ABS(
                (6371 * acos(
                    cos(radians(?)) *
                    cos(radians(lat)) *
                    cos(radians(lng) - radians(?)) +
                    sin(radians(?)) *
                    sin(radians(lat))
                )) - ?
            ) AS diff
        ", [$lat0, $lng0, $lat0, $com->distancia])
        ->orderBy('diff')
        ->firstOrFail();
    
        Pedido::create([
            'comunidad_id'  => $com->id,
            'motorizado_id' => $motorizado->id,
            'estado'        => 'pendiente',
            'tipo'          => $data['tipo'],
        ]);
    
        return redirect()->route('pedidos.index')
                         ->with('success', "Asignado a {$motorizado->nombre}");
    }
}
