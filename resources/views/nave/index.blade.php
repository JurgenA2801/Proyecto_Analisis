@extends('Layouts/plantilla')
<title>Lista de naves</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Naves</h1>
<ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Capacidad de carga</th>
      <th scope="col">Capacidad de pasajeros</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listaDeNaves as $item)
    <tr>
      <td>{{$item -> capacidadCarga	}}</td>
      <td>{{$item -> capacidadPasajeros}}</td>
    </tr>
    
     
@endforeach
  </tbody>
</table>

</ul>
@endsection





