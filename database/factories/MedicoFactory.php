<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medico;

class MedicoFactory extends Factory
{
    protected $model = Medico::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'especialidade' => $this->faker->jobTitle,
            'cidade_id' => random_int(1, 100), // Substitua pelo número correto de cidades no banco de dados
        ];
    }
}