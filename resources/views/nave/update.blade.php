@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Actualizar nave</h1> 


  <form action="{{route('naveUpdate', $nave)}}" method="POST"> 
  @csrf
  @method('put')

  <div class="form-group col-3">
    <label for="capacidadPasajerosInput">Capacidad de pasajeros</label>
    <input type="number" class="form-control" id="capacidadPasajerosInput" name="capacidadPasajeros" 
    value="{{$nave -> capacidadPasajeros}}">
    
  </div>
  <div class="form-group col-3">
    <label for="capacidadCargaInput">Capacidad de carga</label>
    <input type="number" class="form-control" id="capacidadCargaInput" name="capacidadCarga"
    value="{{$nave -> capacidadCarga}}">
    <small id="AyudaCarga" class="form-text text-muted">La carga se mide en kilogramos</small>

    <button type="submit" class="btn btn-primary">Aceptar</button>
  </div>
   

</form>

  
 


@endsection