@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection 

@section('contenido')

<title>Lista de puertos</title>
<h1>Puertos</h1>
<ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Itinerario</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listaDePuertos as $item)
    <tr>
      <td>{{$item -> idItinerario	}}</td>
      <td>{{$item -> nombre}}</td>
    </tr>
    
     
@endforeach
  </tbody>
</table>
@foreach($listaDePuertos as $item)
    {{$item}}

@endforeach

</ul>

{{$listaDePuertos->links()}}

@endsection 



