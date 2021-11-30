<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use Illuminate\Http\Request;
use App\Models\roles;
class usuariosController extends Controller
{
    public function formCreate() { 

        $listaDeroles = roles::all();
        return view('usuarios.create', compact('listaDeroles'));

    }


    public function create(Request $request){ 
        $nuevausuarios = new usuarios(); 
        $nuevausuarios -> nombreUsuario = $request -> nombreUsuario ; 
        $nuevausuarios -> idRol = $request -> idRol;
        $nuevausuarios -> password = $request -> password;
        $nuevausuarios -> save();
        $mensaje="";
        return view('usuarios.iniciar', compact('mensaje'));

    }public function forminiciarsesión() { 

        $mensaje="";
        return view('usuarios.iniciar', compact('mensaje'));

    }
    public function iniciarsesión (Request $request) { 
        
        
        /*$nombreUsuariovalidar=$request -> nombreUsuario;
        $passwordvalidar=$request -> password;
        return view('usuarios.iniciar', compact('mensaje'));*/
        $listaDeusuarios = usuarios::all();
        $vandera= false;
        foreach($listaDeusuarios as $item){
        if ($item-> nombreUsuario==$request -> nombreUsuario&&$item-> password==$request -> password) {
            $vandera= true;
            switch ($item-> idRol) {
                case 1:
                    return redirect()-> route('reserva');
                    break;
                case 2:
                    return redirect()-> route('informes');
                    break;
                case 3:
                    return redirect()-> route('manifiesto');
                    break;
            }
                
            }}
            if($vandera){
                $mensaje="la contraseña o el nombre de usuario son incorrectos";
                return view('usuarios.iniciar', compact('mensaje'));
            
        }

    }
    

}
