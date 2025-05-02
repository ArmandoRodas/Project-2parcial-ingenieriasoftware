<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comunidad;

class ComunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['nombre'=>'Casco Urbano Sansare', 'distancia'=>0],
            ['nombre'=>'Poza Verde',          'distancia'=>6],
            ['nombre'=>'El Aguaje',           'distancia'=>3],
            ['nombre'=>'La Montañita',        'distancia'=>7],
            ['nombre'=>'Santa Inés Quebrada Grande','distancia'=>11],
            ['nombre'=>'San Felipe La Tabla', 'distancia'=>10],
            ['nombre'=>'Estación Jalapa',     'distancia'=>9],
            ['nombre'=>'Buena Vista',         'distancia'=>2],
            ['nombre'=>'Río Grande Abajo',    'distancia'=>6],
            ['nombre'=>'Santa Bárbara',       'distancia'=>13],
            ['nombre'=>'Río Grande Arriba',   'distancia'=>4],
            ['nombre'=>'El Pino',             'distancia'=>9],
            ['nombre'=>'Los Cedros',          'distancia'=>14],
            ['nombre'=>'El Jute',             'distancia'=>12],
            ['nombre'=>'El Juez',             'distancia'=>10],
            ['nombre'=>'Las Cabezas',         'distancia'=>8],
            ['nombre'=>'Los Aritos',          'distancia'=>11],
        ];

        foreach ($datos as $d) {
            Comunidad::create($d);
        }
    }
}
