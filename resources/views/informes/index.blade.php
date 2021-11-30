@extends('Layouts/plantilla')
<title>Informes</title>

@section('barraNavegacion')

@endsection

@section('contenido') 

<div class="card text-center">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h3 class="card-title">Informes</h3>
    <p class="card-text">Seleccione el tipo de informe que desea visualizar</p>
    <a href="{{route ('ingresos')}}" class="btn btn-primary">Ingresos</a> <a href="{{route('formBuscarNave')}}" class="btn btn-primary">Nave por ruta</a>
  </div>
  <div class="card-footer text-muted">
    Naviera PEP
  </div>
</div> 

@endsection





