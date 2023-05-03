<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grupo_proyectos')->insert([
            ['id' => 0, 'nombreGrupoProyecto' => 'PLANIFICADO'],
            ['id' => 1, 'nombreGrupoProyecto' => 'PLANIFICADO 2'],
            ['id' => 2, 'nombreGrupoProyecto' => 'PLANIFICADO 3'],
            
        ]);
    }
}
