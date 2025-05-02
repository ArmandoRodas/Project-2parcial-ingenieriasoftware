<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // <- Importa el trait


class Motorizado extends Model
{
    use HasFactory;                                     // <- Úsalo aquí

    protected $fillable = [
        'nombre',
        'lat',
        'lng',
    ];
}
