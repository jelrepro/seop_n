<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EstadoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_usuarios')->insert([
            ['id' => 0, 'nombreEstadoUsuario' => 'ACTIVO'],
            ['id' => 1, 'nombreEstadoUsuario' => 'RENUNCIO'],
            ['id' => 2, 'nombreEstadoUsuario' => 'REVISAR'],
            ['id' => 3, 'nombreEstadoUsuario' => 'RETIRADO'],
        ]);
    }
}
