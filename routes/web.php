<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\ContratoController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
})->name('home');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/admin.proyectos', function () {
//             return view('admin/proyectos');
//     })->name('/');
// }); 

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'auth.admin'
// ])->group(function () {
//     Route::resource('admin/proyectos', ProyectoController::class);
// });


Route::resource('admin/proyectos', ProyectoController::class)
    ->middleware('auth.admin');

Route::resource('admin/contratos', ContratoController::class)
    ->middleware('auth.admin');
    
Route::resource('admin/clientes', ClienteController::class)
    ->middleware('auth.admin');

Route::get('admin', [AdminController::class, 'index'])
    ->name('admin.index');