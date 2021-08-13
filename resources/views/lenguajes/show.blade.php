@extends('layouts.plantilla')

@section('title', 'Categorias ' . $lenguaje->name)

@section('content')
{{-- otra manera de hacer es colocando --}}
<h1>Bienvenido al Lenguaje de Programación: {{$lenguaje->name}} </h1>

<a href="{{route('lenguajes.index')}}">Volver a cursos</a>

<p><strong>Categoría: </strong>{{$lenguaje->categoria}}</p>
<p>{{$lenguaje->descripcion}}</p>

{{-- tengo que escribi --}}
  {{-- <h1>Bienvenido a la pagina de Lenguajes de Programación: <?php echo $lenguaje;?> </h1> --}}
@endsection
