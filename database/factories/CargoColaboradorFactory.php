<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CargoColaborador>
 */
class CargoColaboradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cargo_id' => rand(1, 10),
            'colaborador_id' => rand(1, 100),
            'nota_desempenho' => null,
        ];
    }
}
