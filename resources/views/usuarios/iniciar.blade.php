@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<h1>Iniciar sesión</h1> 

<form action="{{route('validar')}}" method="POST"> 
  @csrf
  <div class="form-group col-3">
    <label for="nombreUsuarioInput" name="nombreUsuario">Nombre de usuario</label>
    <input type="text" class="form-control" id="nombreUsuarioInput" name="nombreUsuario">    
  </div>

  <div class="form-group col-3">
    <label for="passwordInput">contraseña</label>
    <input type="password" class="form-control" id="passwordInput" name="password">    
  </div>
  <div class="form-group col-3">
  <a>{{$mensaje}}</a>
  
  </div>
  <button type="submit" class="btn btn-primary">Aceptar</button>
  <a href="{{route('usuariosaformCreate')}}"> Registrarse</a> 
</form>

@endsection