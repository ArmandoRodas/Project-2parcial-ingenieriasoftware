<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Motorizado;

class MotorizadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $baseLat = 14.60;
            $baseLng = -89.31;
    
            Motorizado::factory()->count(10)->sequence(fn ($seq) => [
                'nombre' => "Motorizado {$seq->index}",
                'lat'    => $baseLat + (fake()->randomFloat(6, -0.005, 0.005)),
                'lng'    => $baseLng + (fake()->randomFloat(6, -0.005, 0.005)),
            ])->create();
        }
        
    }
}
