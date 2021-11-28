@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection 

@section('contenido') 

<h1>Nuevo puerto</h1> 

<form action="{{route('puertoCreate')}}" method="POST"> 
  @csrf

  <div class="form-group col-3">
    <label for="nombreInput">Nombre</label>
    <input type="text" class="form-control" id="nombreInput" name="nombre">  
  </div>

  <div class="form-group col-3">
    <label for="idItinerarioInput">Itinerario</label>
    <select class="form-control" id="idItinerarioInput" name="idItinerario">

    @foreach ($itinerarios as $itinerario)
      <option value="{{$itinerario->id}}">{{$itinerario->id}}</option>
    @endforeach

    </select>
    <small id="Ayuda" class="form-text text-muted">Itinerario por el que el puerto pasa</small>
  </div>

<button type="submit" class="btn btn-primary">Aceptar</button>
   
</form>
@endsection 