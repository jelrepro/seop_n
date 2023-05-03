<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EstadosAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_admin')->insert([
            ['id' => 0, 'nombreEstadosAdmin' => 'LIQUIDACION'],
            ['id' => 1, 'nombreEstadosAdmin' => 'EJECUCION'],
            ['id' => 2, 'nombreEstadosAdmin' => 'PRECONTRACTUAL'],
           
        ]);
    }
}
