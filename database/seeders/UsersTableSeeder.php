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
            'name' => 'David',
            'email' => 'david@gmail.com',
            'password' => Hash::make('David123'),
        ]);
        User::create([
            'name' => 'Anderson',
            'email' => 'anderson.lopez@ceoesp.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}

