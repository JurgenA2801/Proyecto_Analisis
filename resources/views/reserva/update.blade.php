@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<h1>Actualizar Reserva</h1> 

<form action="{{route('reservaUpdate', $reserva)}}" method="POST"> 
  @csrf
  @method('put')
  <div class="form-group col-3">
    <label for="idTipoReservaInput">Tipo de servicios</label>
    <select class="form-control" id="idTipoReservaInput" name="idTipoReserva">

    @foreach ($tipoServicio as $service)
      <option value="{{$service->id}}">{{$service->tipo}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group col-3">
    <label for="idNaveInput">Nave</label>
    <select class="form-control" id="idNaveInput" name="idNave">

    @foreach ($nave as $naves)
      <option value="{{$naves->id}}">{{$naves->id}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group col-3">
    <label for="PrecioInput">Precio</label>
    <input type="number" class="form-control" id="PrecioInput" name="precio" value="{{$reserva -> precio}}">    
  </div>

 
  <button type="submit" class="btn btn-primary">Aceptar</button>
   
</form>

@endsection