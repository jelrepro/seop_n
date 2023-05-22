<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        $faker = Faker::create();

        // crear algunos usuarios de prueba
        Cliente::create([
            'nombre' => 'Juan Perez',
            'cedula' => 12345678,
            'telefono' => '1234567890',
            'vereda_id' => 1,
            'x' => '123',
            'y' => '456',
            'tipo_usuario_id' => 1,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Sin anotaciones',
            'codSello' => 'ABC123',
            'codMedidor' => 'DEF456',
            'fechaNacimiento' => '1990-01-01',
            'novedad' => 'Sin novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Juan Perez',
            'cedula' => 12345678,
            'telefono' => '1234567890',
            'vereda_id' => 2,
            'x' => '123',
            'y' => '456',
            'tipo_usuario_id' => 1,
            'estado_usuario_id' => 3,
            'anotaciones' => 'Sin anotaciones',
            'codSello' => 'ABC123',
            'codMedidor' => 'DEF456',
            'fechaNacimiento' => '1990-01-01',
            'novedad' => 'Sin novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Juan Perez',
            'cedula' => 12345678,
            'telefono' => '1234567890',
            'vereda_id' => 3,
            'x' => '123',
            'y' => '456',
            'tipo_usuario_id' => 1,
            'estado_usuario_id' => 3,
            'anotaciones' => 'Sin anotaciones',
            'codSello' => 'ABC123',
            'codMedidor' => 'DEF456',
            'fechaNacimiento' => '1990-01-01',
            'novedad' => 'Sin novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 9,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 7,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 0,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 5,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 6,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 3,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 4,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 0,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 8,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 3,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 8,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);
        
        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 8,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 8,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 8,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 5,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 0,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 5,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 2,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 10,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 0,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        Cliente::create([
            'nombre' => 'Maria Rodriguez',
            'cedula' => 87654321,
            'telefono' => '0987654321',
            'vereda_id' => 3,
            'x' => '789',
            'y' => '012',
            'tipo_usuario_id' => 2,
            'estado_usuario_id' => 0,
            'anotaciones' => 'Con anotaciones',
            'codSello' => 'XYZ789',
            'codMedidor' => 'UVW012',
            'fechaNacimiento' => '1980-01-01',
            'novedad' => 'Con novedades',
            'url' => $faker->imageUrl($width = 640, $height = 480),
        ]);

        // crear más usuarios aquí si lo desea
    }

}
