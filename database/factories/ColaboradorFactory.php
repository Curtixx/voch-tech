<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colaborador>
 */
class ColaboradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unidade_id' => rand(1, 100),
            'nome' => $this->faker->name(),
            'cpf' => '550.496.890-90',
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
