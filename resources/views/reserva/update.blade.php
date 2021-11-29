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

    @if ( $reserva -> idTipoReserva === 1)
    <option value="1">Pasajero</option>
    <option value="2">Carga</option>
      @else 
      <option value="2">Carga</option>
      <option value="1">Pasajero</option>    
      @endif
    </select>
  </div>

  <div class="form-group col-3">
    <label for="idNaveInput">Nave</label>
    <select class="form-control" id="idNaveInput" name="idNave">
    
    @foreach ($nave as $naves)
    @if ($reserva -> idNave === $naves->id)
      <option value="{{$naves->id}}" selected>{{$naves->id}}</option>
    @else
      <option value="{{$naves->id}}">{{$naves->id}}</option>
    @endif   
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