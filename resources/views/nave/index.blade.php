@extends('Layouts/plantilla')
<title>Lista de naves</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Naves</h1>
<ul>

@foreach($listaDeNaves as $item)
    {{$item -> capacidadCarga}}
    {{$item -> capacidadPasajeros}} <br>

@endforeach

</ul>
@endsection





