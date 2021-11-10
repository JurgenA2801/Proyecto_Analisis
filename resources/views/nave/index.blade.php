<title>Lista de naves</title>
<h1>Naves</h1>
<ul>

@foreach($listaDeNaves as $item)
    {{$item}}

@endforeach

</ul>

{{$listaDeNaves->links()}}



