@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<h1>Nuevo Reserva</h1> 

<form action="{{route('reservaCreate')}}" method="POST"> 
  @csrf

  <div class="form-group col-3">
    <label for="idTipoReservaInput">Tipo de servicios</label>
    <select class="form-control" id="idTipoReservaInput" name="idTipoReserva">

    @foreach ($servicios as $service)
      <option value="{{$service->id}}">{{$service->tipo}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group col-3">
    <label for="idNaveInput">Nave</label>
    <select class="form-control" id="idNaveInput" name="idNave">

    @foreach ($listaDeNaves as $naves)
      <option value="{{$naves->id}}">{{$naves->id}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group col-3">
    <label for="PrecioInput">Precio</label>
    <input type="number" class="form-control" id="PrecioInput" name="precio">    
  </div>

  <div class="form-group col-3">
    <label for="estadoInput" hidden>Estado</label>
    <select class="form-control" id="estadoInput" name="estado" hidden>
      <option value= 0 selected>Reservada</option>
      <option value= 1 >Pagada</option>
    </select>
  </div>
 


  <button type="submit" class="btn btn-primary">Aceptar</button>
   
</form>

@endsection