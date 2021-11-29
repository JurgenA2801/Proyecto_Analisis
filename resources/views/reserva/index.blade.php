@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection


@section('contenido')
<title>Lista de reservas</title>
<h1>Reservas</h1>
<ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nave</th>
      <th scope="col">Tipo</th>
      <th scope="col">Precio</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($listaDeReserva as $item)
    <tr>
     
      <td>{{$item -> id	}}</td>
      <td>{{$item -> idNave	}}</td>
      @if ( $item -> idTipoReserva === 1)
        <td>Pasajero</td> 
      @else 
        <td>Carga</td> 
      @endif
      <td>₡{{$item -> precio}}</td>

      <td><a href="{{Route ('ReservaFormUpdate', $item ->id )}}"> Editar</a> | 
          <a href="#"> Pagar</a>  </td> 
    </tr> 
    
     
@endforeach
  </tbody>
</table>


</ul>


@endsection


