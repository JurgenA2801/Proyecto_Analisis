<?php

namespace App\Http\Controllers;

use App\Models\itinerario;
use App\Models\nave;
use Illuminate\Http\Request;

class ItinerarioController extends Controller
{
    public function index(){ 

        $listaDeItinerarios = itinerario::all();
        return view('itinerario.index', compact('listaDeItinerarios'));


    } 

    public function itinerario_nave(){  

    $itinerarios = nave::find(1)->itinerario;
    return view('itinerario.informes', compact('itinerarios'));

    } 

    public function formCreate() {  
        $listaDeNaves = nave::all();
        return view('itinerario.create', compact('listaDeNaves'));

    }

    public function create(Request $request){ 
        $nuevoItinerario = new itinerario(); 
        $nuevoItinerario -> idNave = $request -> idNave;
        $nuevoItinerario -> fechaInicio = $request -> fechaInicio ; 
        $nuevoItinerario -> fechaFinal = $request -> fechaFinal;
        $nuevoItinerario -> save();
        return redirect()-> route('itinerario');
    }

    //uno a uno
   /* public function one($id){         
        return nave::find($id)->itinerario;
    } */
}
