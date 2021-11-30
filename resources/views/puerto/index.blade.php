@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection 

@section('contenido')

<title>Lista de puertos</title>
<h1>Puertos</h1>
<ul>
<a href="{{route('puertoFormCreate')}}"> Agregar</a>  
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Itinerario</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listaDePuertos as $item)
    <tr>
      <td>{{$item -> id}}</td>
      <td>{{$item -> idItinerario	}}</td>
      <td>{{$item -> nombre}}</td>
      <td><a href="{{Route ('puertoFormUpdate', $item ->id )}}"> Editar</a> </td> 
    </tr>
    
     
@endforeach
  </tbody>
</table>
</ul>
@endsection 



