<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contrato;

class ContratosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contratos = [
            [
                'estado_admin_id' => 1,
                'proyecto_id' => 1,
                'nombreContrato' => 'Contrato 1',
                'contratista' => 'Empresa A',
                'descripcion' => 'Descripción del contrato 1',
                'nit' => 123456789,
                'sector' => 'Sector 1',
                'k' => 'K1',
                'a' => 'A1',
                'i' => 'I1',
                'u' => 'U1',
                'estado_id' => 1,
                'objecto' => 'Objeto del contrato 1',
                'alcance' => 'Alcance del contrato 1',
                'costoContrato' => 100.00,
                'proyeccion' => 5,
                'anticipo' => 'Anticipo del contrato 1',
                'amortizacion' => 'Amortización del contrato 1',
                'regarantia' => 'Regarantía del contrato 1',
                'director' => 'Director 1',
                'telefono' => '1234567890',
                'correo' => 'correo1@example.com',
                'ordenCompra' => 1001,
                'noSolped' => 101,
                'retefuente' => 10,
                'reteiva' => 5,
                'reteica' => 3,
                'banco' => 'Banco 1',
                'tipoCuenta' => 'Cuenta de ahorros',
                'noCuenta' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'estado_admin_id' => 2,
                'proyecto_id' => 2,
                'nombreContrato' => 'Contrato 2',
                'contratista' => 'Empresa B',
                'descripcion' => 'Descripción del contrato 2',
                'nit' => 987654321,
                'sector' => 'Sector 2',
                'k' => 'K2',
                'a' => 'A2',
                'i' => 'I2',
                'u' => 'U2',
                'estado_id' => 2,
                'objecto' => 'Objeto del contrato 2',
                'alcance' => 'Alcance del contrato 2',
                'costoContrato' => 2000.00,
                'proyeccion' => 3,
                'anticipo' => 'Anticipo del contrato 2',
                'amortizacion' => 'Amortización del contrato 2',
                'regarantia' => 'Regarantía del contrato 2',
                'director' => 'Director 2',
                'telefono' => '9876543210',
                'correo' => 'correo2@example.com',
                'ordenCompra' => 1002,
                'noSolped' => 102,
                'retefuente' => 5,
                'reteiva' => 3,
                'reteica' => 2,
                'banco' => 'Banco 2',
                'tipoCuenta' => 'Cuenta de ahorros',
                'noCuenta' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($contratos as $contrato) {
            Contrato::create($contrato);
        }
    }
}
