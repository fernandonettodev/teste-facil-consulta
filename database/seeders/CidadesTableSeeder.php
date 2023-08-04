<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class CidadesTableSeeder extends Seeder
{
    public function run()
    {
        Cidade::factory()->count(100)->create();
    }
}
