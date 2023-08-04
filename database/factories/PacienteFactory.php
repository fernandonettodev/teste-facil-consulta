<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paciente;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        $cpf = $this->faker->unique()->numerify('###########');
        $cpf = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
        
        return [
            'nome' => $this->faker->name,
            'cpf' => $cpf,
            'celular' => $this->faker->phoneNumber,
        ];
    }
}
