<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory; 
    protected $table = "reserva";

    public function listar(){ 

        $listaDeReserva = reserva::all();
        return $listaDeReserva;


    } 

    public function venta () { 

        return $this->hasOne(venta::class, "idReserva");

    } 

}
