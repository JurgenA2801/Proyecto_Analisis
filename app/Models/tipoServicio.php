<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reserva;

class tipoServicio extends Model
{
    use HasFactory;
    protected $table = 'tipo_reserva';

    public function listar(){ 

        $listaDeTipoServ = reserva::all();
        return $listaDeTipoServ;


    }  
//un tipo de servicio tiene una reserva asociada
    public function reserva()
    {
        return $this->hasOne(reserva::class, "idTipoReserva");
    }

}
