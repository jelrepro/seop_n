<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_proyectos')->insert([
            ['id' => 0, 'nombreTipoProyecto' => 'PLANIFICADO'],
            ['id' => 1, 'nombreTipoProyecto' => 'PLANIFICADO 2'],
            ['id' => 2, 'nombreTipoProyecto' => 'PLANIFICADO 3'],
            
        ]);
    }
}
