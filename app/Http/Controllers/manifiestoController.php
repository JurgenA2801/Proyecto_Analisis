<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manifiesto;
use App\Models\nave;
use App\Models\puerto;

class manifiestoController extends Controller
{
    //
    public function index(){ 

        $listaDeManifiesto= manifiesto::all();
        return view('manifiesto.index', compact('listaDeManifiesto'));

    }
    
    public function Formcreate(){ 
        $listaDeNaves= nave::all();
        $listaDePuertos= puerto::all();
        return view('manifiesto.create', compact('listaDeNaves','listaDePuertos'));
}


    public function create(Request $request){ 

        $nuevoManifiesto = new manifiesto(); 
        $nuevoManifiesto -> idPuertoOrigen = $request -> idPuertoOrigen; 
        $nuevoManifiesto -> tipo = $request -> tipo; 
        $nuevoManifiesto -> fecha = $request -> fecha; 
        $nuevoManifiesto -> idNave = $request -> idNave;
        $nuevoManifiesto -> save();
        return redirect()-> route('manifiesto');


}


    
}
