<?php

namespace App\Http\Controllers;

use App\Models\itinerario;
use Illuminate\Http\Request;
use App\Models\nave;
use App\Models\puerto;
use App\Models\reserva;

class InformesController extends Controller
{
    
    public function index(){    

        
        return view('informes.index');
    }
 

    public function formBuscarNave() { 

        $listaDeNaves = nave::all();
        return view('informes.buscarNave', compact('listaDeNaves'));

    }

    public function nave_ruta(Request $request){    

        $listaItinerarioRuta = new itinerario();
        $listaItinerarioRuta = nave::find($request -> idNave)->itinerario;
        return view('informes.nave_ruta', compact('listaItinerarioRuta'));
    } 

    public function ruta_puerto (itinerario $itinerario) { 

       $listaPuertoItinerario = new puerto();
       $listaPuertoItinerario = itinerario::find($itinerario -> id)->puerto;

       return view('informes.detallesInformeNaveRuta', compact('itinerario', 'listaPuertoItinerario'));


    } 

    public function ingresos () { 

        $listaDeVentas = reserva::all();
        $total = 0.0;
        date_default_timezone_set('America/Costa_Rica');  
        $fecha = date('Y-m-d | H:i');
        foreach($listaDeVentas as $item) { 

                if ($item -> estado == true) {
                 $total += $item -> precio;

                }
        }

        return view('informes.ingresos', compact('total', 'fecha'));
    }  
    public function cierreCaja () { 

        $listaDeVentas = reserva::all();
        $total = 0.0;
        date_default_timezone_set('America/Costa_Rica');  
        $fecha = date('Y-m-d | H:i');
        foreach($listaDeVentas as $item) { 

                if ($item -> estado == true) {
                 $total += $item -> precio;

                }
        }

        return view('informes.cierreCaja', compact('total', 'fecha'));
    }  

}
