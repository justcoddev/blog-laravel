@extends('layouts.plantilla')

@section('title', 'Categorias ' . $lenguaje->name)

@section('content')
{{-- otra manera de hacer es colocando --}}
<h1>Bienvenido al Lenguaje de Programación: {{$lenguaje->name}} </h1>

<a href="{{route('lenguajes.index')}}">Volver a los lenguajes</a>
<br>

<a href="{{route('lenguajes.edit', $lenguaje)}}">Editar Lenguaje</a>

<p><strong>Categoría: </strong>{{$lenguaje->categoria}}</p>
<p>{{$lenguaje->descripcion}}</p>

{{-- tengo que escribi --}}
  {{-- <h1>Bienvenido a la pagina de Lenguajes de Programación: <?php echo $lenguaje;?> </h1> --}}

  <form action="{{route('lenguajes.destroy', $lenguaje )}}" method="POST"> 
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
  </form>
{{-- metodo distinto  debemos indicar que sea post  y dentro del formulario llamar
  la directiva de blade @method() y dentro ponerle el metodo que vamso a usar y
  como vamso a mandarlo desde un formulario, para no tener ningun error debemos pasarle el token
  @scrf
  --}}


@endsection
