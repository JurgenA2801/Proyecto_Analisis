<?php

namespace App\Http\Controllers;

use App\Models\nave;
use Illuminate\Http\Request;

class NaveController extends Controller
{
    public function index(){ 

        $listaDeNaves = nave::all();
        return view('nave.index', compact('listaDeNaves'));


    }

    public function formCreate () { 
        return view('nave.create');


    }


    public function create(Request $request){ 
        $nuevaNave = new nave(); 
        $nuevaNave -> capacidadCarga = $request -> capacidadCarga ; 
        $nuevaNave -> capacidadPasajeros = $request -> capacidadPasajeros;
        $nuevaNave -> save();
        return redirect()-> route('nave');
    }

    public function Formupdate(nave $nave){ 
        
        return view('nave.update', compact('nave'));
    }

    public function update (Request $request, nave $nave){
        
        $nave -> capacidadCarga = $request -> capacidadCarga; 
        $nave -> capacidadPasajeros = $request -> capacidadPasajeros; 
        $nave -> save();
        return redirect()-> route('nave');


    }
}
