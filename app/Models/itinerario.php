<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\nave;


class itinerario extends Model
{
    use HasFactory; 
    protected $table = "itinerario"; 

   
    public function listar(){ 

        $listaDeItinerarios = itinerario::all();
        return $listaDeItinerarios;


    }

}
