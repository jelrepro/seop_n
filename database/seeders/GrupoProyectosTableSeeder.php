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
            ['id' => 0, 'nombreGrupoProyecto' => 'REDES SAN BENARDINO', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 1, 'nombreGrupoProyecto' => 'PROYECTO BUENOS AIRES', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 2, 'nombreGrupoProyecto' => 'PROYECTO CALDONO', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 3, 'nombreGrupoProyecto' => 'PROYECTOS DE CONEXION', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 4, 'nombreGrupoProyecto' => 'CALIDAD', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 5, 'nombreGrupoProyecto' => 'ARQUITECTURA NORTE FASE 2', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 6, 'nombreGrupoProyecto' => 'ARQUITECTURA SUR', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 7, 'nombreGrupoProyecto' => 'REPOTENCIACION Y RECONFIGURACION ZONA SUR / CENTRO', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 8, 'nombreGrupoProyecto' => 'OTROS PROYECTOS', 'nombreTipoProyecto' => 'Inversion'],
            ['id' => 9, 'nombreGrupoProyecto' => 'PROYECTO FAER', 'nombreTipoProyecto' => 'Fondos del estado'],
            
        ]);
    }
}
