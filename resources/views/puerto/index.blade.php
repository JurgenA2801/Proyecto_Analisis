<title>Lista de puertos</title>
<h1>Puertos</h1>
<ul>

@foreach($listaDePuertos as $item)
    {{$item}}

@endforeach

</ul>

{{$listaDePuertos->links()}}



