<?php

use App\Http\Controllers\NaveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItinerarioController;
use App\Http\Controllers\puertoController;
use App\Http\Controllers\ReservasController;



Route::get('/', function () {
    return view('welcome');
}); 

Route::get('nave', [NaveController::class, 'index']);
Route::get('itinerario', [ItinerarioController::class]);
Route::get('venta', [ReservasController::class, 'index']);
Route::get('puerto', [puertoController::class, 'index']); 
Route::get('reserva', [ReservasController::class, 'index']); 
Route::get('principal', [VentasController::class, 'index']);
Route::get('inicioSesion', [iniciarSesionController::class, 'index']);

