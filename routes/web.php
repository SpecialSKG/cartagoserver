<?php

use Illuminate\Support\Facades\Route;
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

Route::get('Servers', [ServersController::class, 'index']);


Route::get('/Inicio','App\http\Controllers\InicioController@index');
Route::get('/Acerca','App\http\Controllers\AcercaController@index');
/* Route::get('/Servers','App\http\Controllers\ServersController@index'); */
Route::get('/Tienda','App\http\Controllers\TiendaController@index');
Route::get('/Donaciones','App\http\Controllers\DonacionesController@index');
