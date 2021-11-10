<title>Lista de reservas</title>
<h1>Reservas</h1>
<ul>

@foreach($listaDeReserva as $item)
    {{$item}}

@endforeach

</ul>

{{$listaDeReserva->links()}}



