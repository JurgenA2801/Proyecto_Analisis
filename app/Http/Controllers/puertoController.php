<?php

namespace App\Http\Controllers;

use App\Models\puerto;
use Illuminate\Http\Request;

class puertoController extends Controller
{
    public function index(){ 

        $listaDePuertos = puerto::paginate();
        return view('puerto.index', compact('listaDePuertos'));


    }
}
