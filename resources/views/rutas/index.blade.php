@extends('Layouts/plantilla')
<title>Lista de naves</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>manifiesto</h1>
<ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Puerto</th>
      <th scope="col">Tipo</th>
      <th scope="col">Nave</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listaDeManifiesto as $item)
    <tr>
      <td>{{$item -> idPuertoOrigen	}}</td>
      <td>{{$item -> tipo}}</td>
      <td>{{$item -> idNave}}</td>
      <td>{{$item -> fecha}}</td>
    </tr>
    
     
@endforeach
  </tbody>
</table>


</ul>
@endsection





