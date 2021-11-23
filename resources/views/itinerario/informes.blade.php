@extends('Layouts/plantilla') 

@section('barraNavegacion')

@endsection


@section('contenido')
@foreach($itinerarios as $item)
<ul>
    {{$item -> id}}|
    {{$item -> idNave}} |
    {{$item -> fechaInicio}} |
    {{$item -> fechaFinal}} | 
    <br>
</ul>
@endforeach
@endsection