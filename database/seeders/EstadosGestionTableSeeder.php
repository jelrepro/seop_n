<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadosGestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_gestions')->insert([
            ['id' => 0, 'nombreEstadoGestion' => 'PLANEACIÓN'],
            ['id' => 1, 'nombreEstadoGestion' => 'EJECUCION'],
            ['id' => 2, 'nombreEstadoGestion' => 'CIERRE'],
            ['id' => 3, 'nombreEstadoGestion' => 'FACTIBILIDAD'],
            ['id' => 4, 'nombreEstadoGestion' => 'INICIO'],
            
        ]);
    }
}
