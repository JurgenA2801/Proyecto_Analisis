@extends('Layouts/plantilla')

@section('barraNavegacion')

@endsection


@section('contenido')
<title>Lista de reservas</title>
<h1>Reservas</h1>
<ul>
<a href="{{route('reservaFormCreate')}}"> Agregar</a>  
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nave</th>
      <th scope="col">Tipo</th>
      <th scope="col">Precio</th>
      <th scope="col">Estado</th>
      
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
      @if ( $item -> estado === 0)
            <td>Reservado</td>

            <td> 
                <a href="{{Route ('reservaPagar', $item)}}"> Pagar </a> |
                <a href="{{Route ('ReservaFormUpdate', $item ->id )}}"> Editar</a>  
           </td>     
      @else 
            <td>Pagado</td>
            
      @endif            

      
         
    </tr> 
    
     
@endforeach
  </tbody>
</table>


</ul>


@endsection


