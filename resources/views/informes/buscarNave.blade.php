@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<h2>Seleccione una nave</h2> 

<form action="{{route('nave_ruta')}}" method="POST"> 
  @csrf 


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