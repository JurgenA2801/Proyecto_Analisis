<?php

namespace App\Http\Controllers;
use App\Models\reserva;
use App\Models\tipoServicio;
use App\Models\nave;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function index(){ 

        $listaDeReserva = reserva::all();
        return view('reserva.index', compact('listaDeReserva'));
    }
    

    public function formCreate() { 

        $servicios = tipoServicio::all();
        $listaDeNaves = nave::all();

        return view('reserva.create', compact('servicios', 'listaDeNaves'));

    }

    public function create (Request $request) { 

        $nuevaReserva = new Reserva(); 
        $nuevaReserva -> idNave = $request -> idNave; 
        $nuevaReserva -> idTipoReserva = $request -> idTipoReserva; 
        $nuevaReserva -> precio = $request -> precio;
        $nuevaReserva -> save();
        return redirect()-> route('reserva');

    }

    public function Formupdate(reserva $reserva){ 
        $tipoServicio = tipoServicio::all();
        $nave = nave::all();
        return view('reserva.update', compact('reserva','tipoServicio','nave'));
    }

    public function update (Request $request, reserva $Reserva){
        
        $Reserva -> idNave = $request -> idNave; 
        $Reserva -> idTipoReserva = $request -> idTipoReserva; 
        $Reserva -> precio = $request -> precio;
        $Reserva -> save();
        return redirect()-> route('reserva');
    }
}
