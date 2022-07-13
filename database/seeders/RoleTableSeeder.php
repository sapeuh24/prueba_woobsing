<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
            'nombre' => 'Administrador',
        ]);

        \DB::table('roles')->insert([
            'nombre' => 'Colaborador',
        ]);
    }
}