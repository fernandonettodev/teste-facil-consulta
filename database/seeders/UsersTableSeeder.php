<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Admin
        $admin = User::create([
            'name' => 'Administrador Christian',
            'email' => 'christian.ramires@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
