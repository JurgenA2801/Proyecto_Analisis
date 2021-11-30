@extends('Layouts/plantilla')
<title>Informes</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h2>Detalles de informe de nave por ruta</h2>

<table class="table table-bordered">
  <thead>
    <tr class="table-info"> 
        <th scope="col">Nº nave</th>
        <th scope="col">Nº itinerario</th>
        <th scope="col">Fecha de inicio</th>
        <th scope="col">Fecha de fin</th>
        <th scope="col">Puertos</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>      
        <td>{{$itinerario -> idNave}}</td>
        <td>{{$itinerario -> id}}</td>
        <td>{{$itinerario -> fechaInicio}}</td>
        <td>{{$itinerario -> fechaFinal}}</td> 
        <td> @foreach( $listaPuertoItinerario as $item) 
            {{$item -> nombre}} <br> 
            @endforeach
        </td>
        
    </tr>
  </tbody>
</table>


@endsection