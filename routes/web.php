<?php

use App\Http\Controllers\NaveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItinerarioController;
use App\Http\Controllers\puertoController;
use App\Http\Controllers\ReservasController;
use App\Models\nave; 
use App\Models\itinerario;
use App\Http\Controllers\manifiestoController;


Route::get('/', function () {
    return view('welcome');
}); 
//Rutas de nave
Route::get('nave', [NaveController::class, 'index']) ->name('nave');
Route::get('naveInsertar', [NaveController::class, 'formCreate']) ->name('naveFormCreate');
Route::post('naveGuardar', [NaveController::class, 'create']) ->name('naveCreate');

Route::get('nave/{nave}/Update', [NaveController::class, 'Formupdate']) -> name('naveFormUpdate');
Route::put('naveUpdate/{nave}', [NaveController::class, 'update']) -> name('naveUpdate');


//Rutas itinerario
Route::get('itinerario', [ItinerarioController::class, 'index']) -> name('itinerario');
Route::get('itinerario_nave', [ItinerarioController::class, 'itinerario_nave']);
Route::get('itinerarioInsertar', [ItinerarioController::class, 'formCreate']) ->name('itinerarioFormCreate');
Route::post('itinerarioGuardar', [ItinerarioController::class, 'create']) ->name('itinerarioCreate');
//
Route::get('itinerario/{itinerario}/Update', [ItinerarioController::class, 'Formupdate']) -> name('itinerarioFormUpdate');
Route::put('itinerarioUpdate/{itinerario}', [ItinerarioController::class, 'update']) -> name('itinerarioUpdate');

//Rutas venta
Route::get('venta', [ReservasController::class, 'index']);

//Rutas puerto
Route::get('puerto', [puertoController::class, 'index']) -> name('puerto'); 
//Route::get('puertobuscar', [puertoController::class, 'buscar']); 
Route::get('puertoInsertar', [puertoController::class, 'formCreate']) -> name('puertoFormCreate'); 
Route::post('puertoGuardar', [puertoController::class, 'create']) ->name('puertoCreate');
//
Route::get('puerto/{puerto}/Update', [PuertoController::class, 'Formupdate']) -> name('puertoFormUpdate');
Route::put('puertoUpdate/{puerto}', [PuertoController::class, 'update']) -> name('puertoUpdate');

//Rutas reserva
Route::get('reserva', [ReservasController::class, 'index']) -> name('reserva'); 
Route::get('reservaInsertar', [ReservasController::class, 'formCreate']) ->name('reservaFormCreate');
Route::post('reservaGuardar', [ReservasController::class, 'create']) ->name('reservaCreate');
Route::get('reserva/{reserva}/Update', [ReservasController::class, 'Formupdate']) -> name('ReservaFormUpdate');
Route::put('reservaUpdate/{reserva}', [ReservasController::class, 'update']) -> name('reservaUpdate');
//Rutas de manifiestoe
Route::get('manifiesto', [manifiestoController::class, 'index']) ->name('manifiesto');
Route::get('manifiestoInsertar', [manifiestoController::class, 'create']) ->name('manifiestoCreate');


//Route::get('principal', [VentasController::class, 'index']);
//Route::get('inicioSesion', [iniciarSesionController::class, 'index']); 

//Route::get('/naves/{id}', [NaveController::class, 'parametro']);//

