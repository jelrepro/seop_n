<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(EstadosGestionTableSeeder::class);
        $this->call(EstadosAdminTableSeeder::class);
        $this->call(GrupoProyectosTableSeeder::class);
        $this->call(TipoProyectosTableSeeder::class);
        $this->call(ProyectosTableSeeder::class);
        $this->call(ContratosTableSeeder::class);
        $this->call(VeredasTableSeeder::class);
        $this->call(TipoUsuariosTableSeeder::class);
        $this->call(EstadoUsuarioTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        // $this->call(::class);
    }
}
