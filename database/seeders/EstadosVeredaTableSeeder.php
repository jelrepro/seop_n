<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EstadosVeredaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_veredas')->insert([
            ['id' => 0, 'nombreEstadosVereda' => 'REPLANTAEDA'],
            ['id' => 1, 'nombreEstadosVereda' => 'EJECUCION'],
            ['id' => 2, 'nombreEstadosVereda' => 'ENTREGADA'],
            
        ]);
    }
}
