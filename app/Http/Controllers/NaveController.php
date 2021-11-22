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

    public function create(){ 
        $nuevaNave = new nave(); 
        $nuevaNave -> capacidadCarga = 30; 
        $nuevaNave -> capacidadPasajeros = 35;
        $nuevaNave -> save();
    }

    public function update($id){ 
        $actualizarNave = nave::find($id);
        $actualizarNave-> capacidadCarga = 10;
        $actualizarNave->save();

    }

}
