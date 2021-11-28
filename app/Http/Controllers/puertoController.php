<?php

namespace App\Http\Controllers;

use App\Models\itinerario;
use App\Models\manifiesto;
use App\Models\puerto;
use Illuminate\Http\Request;

class puertoController extends Controller
{
    public function index(){ 

        $listaDePuertos = puerto::all();
        return view('puerto.index', compact('listaDePuertos'));


    }

    public function buscar(){  

         $puerto = manifiesto::find(1)->puerto->idPuertoOrigen;
         
        return $puerto;
    
    } 

    public function formCreate () { 

        $itinerarios = itinerario::all();
        return view('puerto.create', compact('itinerarios'));
    }

    public function create(Request $request)
    {
        $puerto = new puerto(); 
        $puerto -> idItinerario = $request -> idItinerario; 
        $puerto -> nombre = $request -> nombre; 
        $puerto -> save();
        return redirect()-> route('puerto');
    }


}
