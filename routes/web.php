<?php

use App\Http\Controllers\NaveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;

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
    return view('welcome');
}); 

Route::get('nave', [NaveController::class, 'index']);
Route::get('itinerario', [ItinerarioController::class, 'index']);
Route::get('venta', [ReservasController::class, 'index']);
Route::get('reserva', [VentasController::class, 'index']); 
Route::get('principal', [VentasController::class, 'index']);
Route::get('inicioSesion', [VentasController::class, 'index']);

