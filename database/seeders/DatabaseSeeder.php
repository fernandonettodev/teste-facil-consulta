<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CidadesTableSeeder::class);
        $this->call(MedicosTableSeeder::class);
        $this->call(PacientesTableSeeder::class);
    }
}
