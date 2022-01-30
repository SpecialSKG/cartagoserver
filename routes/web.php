<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\CajasController;
use App\Http\Controllers\ServersController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PvpDinosVipController;
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

Route::get('/', [InicioController::class, 'index'])->name('Inicio');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::get('Inicio', [InicioController::class, 'index'])->name('Inicio');
Route::get('Acerca', [AcercaController::class, 'index'])->name('Acerca');
Route::get('Servers', [ServersController::class, 'index'])->name('Servers');
Route::get('Donaciones', [DonacionesController::class, 'index'])->name('Donaciones');
Route::get('Cajas', [CajasController::class, 'index'])->name('Cajas');
Route::get('Tienda', [TiendaController::class, 'index'])->name('Tienda');
Route::get('PvpDinosVip',[PvpDinosVipController::class, 'index'])->name('PvpDinosVip');
