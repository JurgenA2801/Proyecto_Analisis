@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<h1>Actualizar itinerario</h1> 


<form action="{{route('itinerarioUpdate', $itinerario)}}" method="POST"> 
  @csrf
  @method('put')
  <div class="form-group col-3">
    <label for="fechaInicioInput">Fecha de inicio</label>
    <input size="16" type="datetime-local" class="form-control" id="fechaInicioInput" name="fechaInicio" value="{{$itinerario -> fechaInicio}}">
    
  </div>

  <div class="form-group col-3">
    <label for="fechaFinalInput">Fecha final</label>
    <input size="16" type="datetime-local" class="form-control" id="fechaFinalInput" name="fechaFinal" value="{{$itinerario -> fechaFinal}}">   
  </div>

 
  <div class="form-group col-3">
    <label for="idNaveInput">Nave</label>
    <select class="form-control" id="idNaveInput" name="idNave">

    @foreach ($nave as $naves)
      <option value="{{$naves->id}}">{{$naves->id}}</option>
    @endforeach
    </select>
  </div>


  <button type="submit" class="btn btn-primary">Aceptar</button>
   

</form>




@endsection