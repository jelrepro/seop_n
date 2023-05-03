<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            'codigo' => '19',
            'descripcion' => 'CAUCA',
        ]);
        DB::table('departamentos')->insert([
            'codigo' => '52',
            'descripcion' => 'NARIÑO',
        ]);
        DB::table('departamentos')->insert([
            'codigo' => '76',
            'descripcion' => 'VALLE DEL CAUCA',
        ]);
    }
}
