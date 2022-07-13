<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Amilkar',
            'apellido' => 'Bolaño',
            'email' => 'byjossone@gmail.com',
            'telefono' => '1234567890',
            'password' => bcrypt('123456'),
            'ultima_conexion' => now(),
            'role_id' => 1,

        ]);
    }
}