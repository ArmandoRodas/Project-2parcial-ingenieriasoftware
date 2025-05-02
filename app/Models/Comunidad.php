<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comunidad extends Model
{
    //  
    use Hasfactory;
    
    protected $table = 'comunidades';
    protected $fillable = ['nombre', 'distancia'];
}
