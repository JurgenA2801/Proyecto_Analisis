@extends('Layouts/plantilla')
<title>Lista de naves</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h1>Naves</h1>
<ul>

@foreach($listaDeNaves as $item)
    {{$item}}

@endforeach

</ul>

{{$listaDeNaves->links()}}
@endsection





