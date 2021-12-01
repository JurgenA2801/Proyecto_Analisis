@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Nueva nave</h1> 


  <form action="{{route('manifiestoCreate')}}" method="POST"> 
  @csrf

  <div class="form-group col-3">
    <label for="idPuertoInput">Puerto de origen</label>
    <select class="form-control" id="idPuertoInput" name="idPuertoOrigen">

    @foreach ($listaDePuertos as $puerto)
      <option value="{{$puerto->id}}">{{$puerto->nombre}}</option>
    @endforeach
    </select>
  </div> 

  <div class="form-group col-3">
    <label for="idTipoInput">Tipo</label>
    <select class="form-control" id="idTipoInput" name="tipo">

      <option value="Pasajero">Pasajero</option>
      <option value="Carga">Carga</option>
    </select>
  </div>

  <div class="form-group col-3">
    <label for="fechaInput">Fecha</label>
    <input size="16" type="datetime-local" class="form-control" id="fechaInput" name="fecha">    
  </div>

  <div class="form-group col-3">
    <label for="idNaveInput">Nave</label>
    <select class="form-control" id="idNaveInput" name="idNave">

    @foreach ($listaDeNaves as $naves)
      <option value="{{$naves->id}}">{{$naves->id}}</option>
    @endforeach
    </select>

   
  </div>
  <button type="submit" class="btn btn-primary">Aceptar</button>

 
</form>

  
 


@endsection