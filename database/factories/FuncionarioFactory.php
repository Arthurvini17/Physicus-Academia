<?php

namespace Database\Factories;

use App\Models\Funcionario;
use App\Models\Funcionarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioFactory extends Factory
{
    protected $model = Funcionarios::class;

    public function definition()
    {
        return [
            'name_funcionario' => $this->faker->name,
            'cargo' =>fake()->text(),
        ];
    }
}
