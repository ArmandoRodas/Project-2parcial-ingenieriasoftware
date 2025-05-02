<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    // Permitir asignación masiva de estos campos:
    protected $fillable = [
        'comunidad_id',
        'motorizado_id',
        'estado',
        'tipo',
    ];

    public function motorizado()
    {
        return $this->belongsTo(Motorizado::class);
    }

    public function comunidad()
    {
        return $this->belongsTo(Comunidad::class);
    }

}
