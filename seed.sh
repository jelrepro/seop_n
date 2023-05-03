#!/bin/bash

php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=EstadoTableSeeder
php artisan db:seed --class=DepartamentosTableSeeder
php artisan db:seed --class=MunicipiosTableSeeder
php artisan db:seed --class=EstadosGestionTableSeeder
php artisan db:seed --class=EstadosAdminTableSeeder
php artisan db:seed --class=GrupoProyectosTableSeeder
php artisan db:seed --class=TipoProyectosTableSeeder
php artisan db:seed --class=ProyectosTableSeeder
php artisan db:seed --class=ContratosTableSeeder
# php artisan db:seed --class=ConveniosTableSeeder
# php artisan db:seed --class=ProyectosTableSeeder

