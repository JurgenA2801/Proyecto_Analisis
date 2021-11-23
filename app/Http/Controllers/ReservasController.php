<?php

namespace App\Http\Controllers;
use App\Models\reserva;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index(){ 

        $listaDeReserva = reserva::paginate();
        return view('reserva.index', compact('listaDeReserva'));
    }
    


}
