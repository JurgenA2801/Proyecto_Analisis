<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puerto extends Model
{
    use HasFactory;
    protected $table = 'puerto';

    public function listar(){ 

        $listaDePuertos = puerto::all();
        return $listaDePuertos;


    }

}


