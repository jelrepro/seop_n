<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipoUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_usuarios')->insert([
            ['id' => 0, 'nombreTipoUsuario' => 'INICIAL'],
            ['id' => 1, 'nombreTipoUsuario' => 'NUEVO'],
            ['id' => 2, 'nombreTipoUsuario' => 'PROYECTADO'],
            
        ]);
    }
}
