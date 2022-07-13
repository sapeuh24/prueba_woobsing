<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permisos')->insert([
            'permiso' => 'Listar Usuarios',
        ]);
        DB::table('permisos')->insert([
            'permiso' => 'Ver usuario',
        ]);
        DB::table('permisos')->insert([
            'permiso' => 'Crear usuario',
        ]);
        DB::table('permisos')->insert([
            'permiso' => 'Editar usuario',
        ]);
        DB::table('permisos')->insert([
            'permiso' => 'Eliminar usuario',
        ]);
    }
}