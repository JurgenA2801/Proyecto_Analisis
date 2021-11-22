<?php

namespace App\Http\Controllers;

use App\Models\itinerario;
use App\Models\nave;
use Illuminate\Http\Request;

class ItinerarioController extends Controller
{
    public function index(){ 

        $listaDeItinerarios = itinerario::paginate();
        return view('itinerario.index', compact('listaDeItinerarios'));


    } 

    public function one(){ 
        
        return nave::find(1)->itinerario;

    }
}
