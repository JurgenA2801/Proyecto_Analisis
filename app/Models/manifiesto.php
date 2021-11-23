<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manifiesto extends Model
{
    use HasFactory;
   
    /*protected $fillable = ['atributo', 'atributo']; */
    protected $table = "manifiestos"; 
   

    public function listar(){ 

        $manifiesto = manifiesto::all();
        return $manifiesto;


    }
}
