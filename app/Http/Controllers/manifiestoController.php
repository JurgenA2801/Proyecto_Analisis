<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manifiesto;


class manifiestoController extends Controller
{
    //
    public function index(){ 

        $listaDeManifiesto= manifiesto::paginate();
        return view('manifiesto.index', compact('listaDeManifiesto'));


    }
    public function create(){ 
        return view('manifiesto.create');
       /* $nuevamanifiesto = new manifiesto(); 
        $nuevamanifiesto -> capacidadCarga = 10; 
        $nuevamanifiesto -> capacidadPasajeros = 25;
        $nuevamanifiesto -> save();*/
    }

    
}
