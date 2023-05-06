<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyectos = [
            [
                'proyectos' => 'RPT TRAFO ARGELIA',
                'municipio_id' => 2,
                'costoProyecto' => 100000.00,
                'estado_id' => 0,
                'cliente' => 'Cliente A',
                'supervisor' => 'Supervisor A',
                'telefono' => '1234567890',
                'correo' => 'prueba2@gmail.com',
                'descripcion' => 'Descripción del Convenio A',
                'estado_gestion_id' => 1,
                'objeto' => 'Objetivo del Convenio A',
                'alcance' => 'Alcance del Convenio A',
                'anio' => '2022',
                'centro_costos' => 'Centro de Costos del Convenio A',
                'orden_interna' => 'Orden Interna del Convenio A',
                'cod_inva' => 'GGS-553-2020',
                'grupo_proyecto_id' => 1,
                'tipo_proyecto_id' => 1,
                'responsable_user_id' => 6,
            ],
            [
                'proyectos' => 'RPT ZONA SUR 1',
                'municipio_id' => 1,
                'costoProyecto' => 100000.00,
                'estado_id' => 0,
                'cliente' => 'Cliente A',
                'supervisor' => 'Supervisor A',
                'telefono' => '1234567890',
                'correo' => 'prueba2@gmail.com',
                'descripcion' => 'Descripción del Proyecto A',
                'estado_gestion_id' => 4,
                'objeto' => 'Objetivo del Convenio A',
                'alcance' => 'Alcance del Convenio A',
                'anio' => '2022',
                'centro_costos' => 'Centro de Costos del Convenio A',
                'orden_interna' => 'Orden Interna del Convenio A',
                'cod_inva' => 'GSA-172-2012',
                'grupo_proyecto_id' => 1,
                'tipo_proyecto_id' => 1,
                'responsable_user_id' => 1,
            ],
            [
                'proyectos' => 'RPT ZONA SUR 2',
                'municipio_id' => 1,
                'costoProyecto' => 100000.00,
                'estado_id' => 3,
                'cliente' => 'Cliente A',
                'supervisor' => 'Supervisor A',
                'telefono' => '1234567890',
                'correo' => 'prueba5@gmail.com',
                'descripcion' => 'Descripción del Proyecto A',
                'estado_gestion_id' => 1,
                'objeto' => 'Objetivo del Convenio A',
                'alcance' => 'Alcance del Convenio A',
                'anio' => '2022',
                'centro_costos' => 'Centro de Costos del Convenio A',
                'orden_interna' => 'Orden Interna del Convenio A',
                'cod_inva' => 'G5C-504-2022',
                'grupo_proyecto_id' => 1,
                'tipo_proyecto_id' => 1,
                'responsable_user_id' => 2,
            ],
            [
                'proyectos' => 'GGC-504-2022',
                'municipio_id' => 1,
                'costoProyecto' => 100000.00,
                'estado_id' => 1,
                'cliente' => 'Cliente A',
                'supervisor' => 'Supervisor A',
                'telefono' => '1234567890',
                'correo' => 'prueba3@gmail.com',
                'descripcion' => 'Descripción del Convenio A',
                'estado_gestion_id' => 2,
                'objeto' => 'Objetivo del Convenio A',
                'alcance' => 'Alcance del Convenio A',
                'anio' => '2022',
                'centro_costos' => 'Centro de Costos del Convenio A',
                'orden_interna' => 'Orden Interna del Convenio A',
                'cod_inva' => '301200',
                'grupo_proyecto_id' => 1,
                'tipo_proyecto_id' => 1,
                'responsable_user_id' => 1,
            ],
            [
                'proyectos' => 'GGC-504-2020',
                'municipio_id' => 1,
                'costoProyecto' => 100000.00,
                'estado_id' => 1,
                'cliente' => 'Cliente A',
                'supervisor' => 'Supervisor A',
                'telefono' => '1234567890',
                'correo' => 'prueba3@gmail.com',
                'descripcion' => 'Descripción del Convenio A',
                'estado_gestion_id' => 1,
                'objeto' => 'Objetivo del Convenio A',
                'alcance' => 'Alcance del Convenio A',
                'anio' => '2022',
                'centro_costos' => 'Centro de Costos del Convenio A',
                'orden_interna' => 'Orden Interna del Convenio A',
                'cod_inva' => '1212',
                'grupo_proyecto_id' => 1,
                'tipo_proyecto_id' => 1,
                'responsable_user_id' => 4,
            ],
            [
                'proyectos' => 'GGC-554-2020',
                'municipio_id' => 1,
                'costoProyecto' => 100000.00,
                'estado_id' => 1,
                'cliente' => 'Cliente A',
                'supervisor' => 'Supervisor A',
                'telefono' => '1234567890',
                'correo' => 'prueba3@gmail.com',
                'descripcion' => 'Descripción del Convenio A',
                'estado_gestion_id' => 4,
                'objeto' => 'Objetivo del Convenio A',
                'alcance' => 'Alcance del Convenio A',
                'anio' => '2022',
                'centro_costos' => 'Centro de Costos del Convenio A',
                'orden_interna' => 'Orden Interna del Convenio A',
                'cod_inva' => '402000',
                'grupo_proyecto_id' => 1,
                'tipo_proyecto_id' => 1,
                'responsable_user_id' => 3,
            ],
            // Agregue más datos si lo desea
        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }
    }
}
