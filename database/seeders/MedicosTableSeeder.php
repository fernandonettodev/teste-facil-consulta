<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicosTableSeeder extends Seeder
{
    public function run()
    {
        Medico::factory()->count(75)->create();
    }
}
