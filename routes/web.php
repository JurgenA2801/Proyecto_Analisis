<?php

use App\Http\Controllers\NaveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItinerarioController;
use App\Http\Controllers\puertoController;
use App\Http\Controllers\ReservasController;
use App\Models\nave; 
use App\Models\itinerario;



Route::get('/', function () {
    return view('welcome');
}); 
//Rutas de nave
Route::get('nave', [NaveController::class, 'index']) ->name('nave');
Route::get('naveInsertar', [NaveController::class, 'create']) ->name('naveCreate');
Route::get('naveUpdate/{id}', [NaveController::class, 'update']) -> name('naveUpdate')  ;


//Rutas itinerario
Route::get('itinerario', [ItinerarioController::class, 'index']) -> name('itinerario');
Route::get('itinerarioX', [ItinerarioController::class, 'one']);    
   


//Route::get('itinerario/{id}/nave', [ItinerarioController::class, 'oneToOne']) -> name('itinerario_nave');

//Rutas venta
Route::get('venta', [ReservasController::class, 'index']);

//Rutas puerto
Route::get('puerto', [puertoController::class, 'index']) -> name('puerto'); 

//Rutas reserva
Route::get('reserva', [ReservasController::class, 'index']) -> name('reserva'); 



//Route::get('principal', [VentasController::class, 'index']);
//Route::get('inicioSesion', [iniciarSesionController::class, 'index']); 

//Route::get('/naves/{id}', [NaveController::class, 'parametro']);//

