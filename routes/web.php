<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\ServersController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\TiendaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web/inicio');
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::get('Inicio', [InicioController::class, 'index']);
Route::get('Acerca', [AcercaController::class, 'index']);
Route::get('Servers', [ServersController::class, 'index']);
Route::get('Donaciones', [DonacionesController::class, 'index']);
Route::get('Tienda', [TiendaController::class, 'index']);

