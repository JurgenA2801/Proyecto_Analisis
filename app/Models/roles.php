<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reserva;

class roles extends Model
{
    use HasFactory;
    protected $table = 'roles';

     
//un tipo de servicio tiene una reserva asociada
    public function reserva()
    {
        return $this->hasOne(reserva::class, "idRol");
    }

}
