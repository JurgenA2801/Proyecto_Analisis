@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')

<title>Lista de itinerarios</title>
<h1>Itinerarios</h1>
<ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nave</th>
      <th scope="col">Fecha de Inicio</th>
      <th scope="col">Fecha de final</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listaDeItinerarios as $item)
    <tr>
      <td>{{$item -> idNave	}}</td>
      <td>{{$item -> fechaInicio}}</td>
      <td>{{$item -> fechaFinal}}</td>
    </tr>
    
     
@endforeach
  </tbody>
</table>


</ul>


@endsection


