@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<h1>Nuevo usuarios</h1> 

<form action="{{route('usuarioCreate')}}" method="POST"> 
  @csrf

  <div class="form-group col-3">
    <label for="idRolInput">Tipo de roles</label>
    <select class="form-control" id="idRolInput" name="idRol">

    @foreach ($listaDeroles as $roles)
      <option value="{{$roles->id}}">{{$roles->tipo}}</option>
    @endforeach
    </select>
  </div>

  

  <div class="form-group col-3">
    <label for="nombreUsuarioInput">Nombre de usuario</label>
    <input type="text" class="form-control" id="nombreUsuarioInput" name="nombreUsuario">    
  </div>

  <div class="form-group col-3">
    <label for="passwordInput">contraseña</label>
    <input type="password" class="form-control" id="passwordInput" name="password">    
  </div>
 


  <button type="submit" class="btn btn-primary">Aceptar</button>
   
</form>

@endsection