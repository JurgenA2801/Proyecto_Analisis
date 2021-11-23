<?php

namespace App\Http\Controllers;

use App\Models\manifiesto;
use App\Models\puerto;
use Illuminate\Http\Request;

class puertoController extends Controller
{
    public function index(){ 

        $listaDePuertos = puerto::paginate();
        return view('puerto.index', compact('listaDePuertos'));


    }

    public function buscar(){  

         $puerto = manifiesto::find(1)->puerto->idPuertoOrigen;
         
        return $puerto;
    
        } 


}
