<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manifiesto;


class manifiestoController extends Controller
{
    //
    public function index(){ 

        $listaDeManifiesto= manifiesto::all();
        return view('manifiesto.index', compact('listaDeManifiesto'));


    }
    public function formCreate () { 
        return view('manifiesto.create');


    }
    public function create(request $request){ 
        
       $nuevamanifiesto = new manifiesto(); 
        $nuevamanifiesto -> capacidadCarga = 10; 
        $nuevamanifiesto -> capacidadPasajeros = 25;
        $nuevamanifiesto -> save();
        return redirect()-> route('manifiesto');
    }

    
}
