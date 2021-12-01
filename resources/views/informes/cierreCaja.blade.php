@extends('Layouts/plantilla')
<title>Informes</title>

@section('barraNavegacion')

@endsection

@section('contenido')
<h2>Cierre de Caja</h2>

<table class="table table-bordered">
    <thead>
        <tr class="table-info"> 
            <th scope="col">Fecha</th>
            <th scope="col">Total</th>      
        </tr>
    </thead>

    <tbody>
        <tr>      
            <td>{{$fecha}}</td>
            <td>{{$total}}</td>        
        </tr>
    </tbody>
</table> 
<a href="{{route('informes')}}">Volver</a> 



@endsection