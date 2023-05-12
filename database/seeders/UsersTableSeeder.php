<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Crea un usuario con los datos proporcionados
        User::create([
            'name' => 'Anderson Lopez',
            'email' => 'anderson.lopez@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'Carlos Cabal',
            'email' => 'carlos.caval@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'Carol Trejo',
            'email' => 'carol.trejo@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'Daniel Castañeda',
            'email' => 'daniel.castañeda@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'Edelin Zuñiga',
            'email' => 'edelin.zuniga@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'Luis Jaimes',
            'email' => 'luis.jaimes@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => Hash::make('David123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
        ]);
    }
}

