@extends('Layouts/plantilla')
<title>Lista de naves</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Naves</h1>
<ul>
<a href="{{route('naveFormCreate')}}"> Agregar</a> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Capacidad de carga</th>
      <th scope="col">Capacidad de pasajeros</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listaDeNaves as $item)
    <tr>
      <td>{{$item -> id	}}</td>
      <td>{{$item -> capacidadCarga	}}</td>
      <td>{{$item -> capacidadPasajeros}}</td>
      <td><a href="{{Route ('naveFormUpdate', $item -> id)}}"> Editar</a> </td> 
    </tr>     
@endforeach
  </tbody>
</table>
<a href="{{route('informes')}}">Volver</a>
</ul>
@endsection





