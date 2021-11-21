<?php

use App\Http\Controllers\NaveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItinerarioController;
use App\Http\Controllers\puertoController;
use App\Http\Controllers\ReservasController;



Route::get('/', function () {
    return view('welcome');
}); 

Route::get('nave', [NaveController::class, 'index']) ->name('nave');
Route::get('itinerario', [ItinerarioController::class, 'index']) -> name('itinerario');
Route::get('venta', [ReservasController::class, 'index']);
Route::get('puerto', [puertoController::class, 'index']) -> name('puerto'); 
Route::get('reserva', [ReservasController::class, 'index']) -> name('reserva'); 
//Route::get('principal', [VentasController::class, 'index']);
//Route::get('inicioSesion', [iniciarSesionController::class, 'index']); 

//Route::get('/naves/{id}', [NaveController::class, 'parametro']);//

