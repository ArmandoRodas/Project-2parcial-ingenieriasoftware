<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motorizado>
 */
class MotorizadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'lat'    => 14.60 + $this->faker->randomFloat(6, -0.005, 0.005),
            'lng'    => -89.31 + $this->faker->randomFloat(6, -0.005, 0.005),
        ];
    }
}
