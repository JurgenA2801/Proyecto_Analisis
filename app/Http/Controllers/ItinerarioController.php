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

    public function itinerario_nave(){  

    $itinerarios = nave::find(1)->itinerario;
    return view('itinerario.informes', compact('itinerarios'));

    } 

    //uno a uno
   /* public function one($id){         
        return nave::find($id)->itinerario;
    } */
}
