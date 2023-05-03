<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert([
            ['id' => 0, 'nombreEstado' => 'ACTIVO'],
            ['id' => 1, 'nombreEstado' => 'CERRADO'],
            ['id' => 2, 'nombreEstado' => 'SUSPENDIDO'],
            ['id' => 3, 'nombreEstado' => 'PROCESO'],
        ]);
    }
}
