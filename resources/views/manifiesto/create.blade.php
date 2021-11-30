@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Nueva nave</h1> 


  <form action="{{route('naveCreate')}}" method="POST"> 
  @csrf

  <div class="form-group col-3">
    <label for="capacidadPasajerosInput">Capacidad de pasajeros</label>
    <input type="number" class="form-control" id="capacidadPasajerosInput" name="capacidadPasajeros">
    
  </div>
  <div class="form-group col-3">
    <label for="capacidadCargaInput">Capacidad de carga</label>
    <input type="number" class="form-control" id="capacidadCargaInput" name="capacidadCarga">
    <small id="AyudaCarga" class="form-text text-muted">La carga se mide en kilogramos</small>

    <button type="submit" class="btn btn-primary">Aceptar</button>
  </div>
   

</form>

  
 


@endsection