@extends('Layouts/plantilla')
<title>Informes</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Informe de nave por ruta</h1>
<ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nº itinerario</th>
      <th scope="col">Nº nave</th>
      <th scope="col">Fecha de inicio</th>
      <th scope="col">Fecha de fin</th>
    </tr>
  </thead>

  <tbody>
    @foreach($listaItinerarioRuta as $item)
    <tr>
      <td>{{$item -> id}}</td>
      <td>{{$item -> idNave}}</td>
      <td>{{$item -> fechaInicio}}</td>
      <td>{{$item -> fechaFinal}}</td>
      <td><a href="{{Route ('ruta_puerto', $item)}}"> Detalles</a> </td> 
    </tr> 
    @endforeach    
  </tbody>
</table>

</ul>




@endsection