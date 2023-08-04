<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacientesTableSeeder extends Seeder
{
    public function run()
    {
        Paciente::factory()->count(200)->create();
    }
}
