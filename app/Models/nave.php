<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nave extends Model
{
    use HasFactory;
    /*protected $fillable = ['atributo', 'atributo']; */
    protected $table = "nave"; 
   

    public function listar(){ 

        $nave = nave::all();
        return $nave;


    }

//una nave tiene muchos itinerarios
    public function itinerario()
    {
        return $this->hasMany(itinerario::class, "idNave");
    } 

//una nave puede tener muchas reservas de pasajeros o carga
    public function reserva()
    {
        return $this->hasMany(reserva::class, "idNave");
    } 
    
//una nave puede tener muchos manifiestos de sus pasajeros o de la carga
    public function manifiesto()
    {
        return $this->hasMany(manifiesto::class, "idNave");
    } 

}
