<?php

namespace App\Http\Controllers;

use App\Models\nave;
use Illuminate\Http\Request;

class NaveController extends Controller
{
    public function index(){ 

        $listaDeNaves = nave::paginate();
        return view('nave.index', compact('listaDeNaves'));


    }

    //public function parametro($id){ 

        //return "Valor pasado: $id";
    //}
}
