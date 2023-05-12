<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vereda;
class VeredasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $veredas = [
            [
                'veredas' => 'CHICHUCUE',
                'sector' => 'Sector 1',
                'contrato_id' => 1,
                'proyecto_id' => 1,
                'latitud' => '40.4168',
                'longitud' => '-3.7038'
            ],
            [
                'veredas' => 'COSCURO',
                'sector' => 'Sector 1',
                'contrato_id' => 1,
                'proyecto_id' => 1,
                'latitud' => '51.5074',
                'longitud' => '-0.1278'
            ],
            [
                'veredas' => 'TIERRAS BLANCAS',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'LA MILAGROSA',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'YAQUIVA',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'DOS QUEBRADAS',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'EL CABUYO',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'MESOPOTAMIA',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'CALDERAS',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'SANTA ROSA',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'SAN ANDRES',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'TUMBICHUCUE',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'EL LAGO',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],
            [
                'veredas' => 'RIO SUCIO',
                'sector' => 'Sector 1',
                'contrato_id' => 2,
                'proyecto_id' => 2,
                'latitud' => '48.8566',
                'longitud' => '2.3522'
            ],

            // Agrega aquí más registros de veredas de prueba si lo deseas
        ];

        foreach ($veredas as $vereda) {
            Vereda::create($vereda);
        }
    }
    
}
