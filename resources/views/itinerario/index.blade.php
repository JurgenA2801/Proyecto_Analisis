@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection

@section('contenido')
<title>Lista de itinerarios</title>
<h1>Itinerarios</h1>
<ul>

@foreach($listaDeItinerarios as $item)
    {{$item}}

@endforeach

</ul>


@endsection


