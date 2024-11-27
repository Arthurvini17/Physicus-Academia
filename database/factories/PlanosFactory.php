<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planos>
 */
class PlanosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  // PlanosFactory.php
public function definition(): array
{
    return [
        'name_plano' => fake()->firstNameMale(),
        'descricao_plano' => fake()->text(),
        'funcionario_id' => \App\Models\Funcionarios::factory(),
        'user_id' => \App\Models\User::factory(),
    ];
}
}
