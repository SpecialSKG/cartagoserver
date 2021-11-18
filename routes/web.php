<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\InicioController;
use App\http\Controllers\AcercaController;
use App\http\Controllers\ServersController;
use App\http\Controllers\TiendaController;
use App\http\Controllers\DonacionesController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/Inicio', [InicioController::class, 'index']);
Route::get('/Acerca', [AcercaController::class, 'index']);
Route::get('/Servers', [ServersController::class, 'index']);
Route::get('/Tienda', [TiendaController::class, 'index']);
Route::get('/Donaciones', [DonacionesController::class, 'index']);