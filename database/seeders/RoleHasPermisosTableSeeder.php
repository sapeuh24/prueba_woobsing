<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permisos')->insert([
            'role_id' => 1,
            'permiso_id' => 1,
        ]);
        DB::table('role_has_permisos')->insert([
            'role_id' => 1,
            'permiso_id' => 2,
        ]);
        DB::table('role_has_permisos')->insert([
            'role_id' => 1,
            'permiso_id' => 3,
        ]);
        DB::table('role_has_permisos')->insert([
            'role_id' => 2,
            'permiso_id' => 3,
        ]);
        DB::table('role_has_permisos')->insert([
            'role_id' => 2,
            'permiso_id' => 4,
        ]);
        DB::table('role_has_permisos')->insert([
            'role_id' => 2,
            'permiso_id' => 5,
        ]);
    }
}