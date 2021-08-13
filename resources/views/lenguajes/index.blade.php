@extends('layouts.plantilla')

@section('title', 'lenguajes de programación')

@section('content')
     <h1>"Bienvenido a la pagina principal de Lenguajes de Programación"</h1>
     <a href="{{route('lenguajes.create')}}">Crear nuevo Lenguaje </a>
     {{-- a partir de esta linea vamso am ostrar la coleccion que traemos desde el controlador  --}}
     <ul> 
          @foreach ($lenguajes as $lenguaje)
              <li>
                   <a href="{{route('lenguajes.show', $lenguaje->id)}}">{{$lenguaje-> name}}</a>
              </li>
          @endforeach
     </ul>
     {{-- estas lineas para crear los supeustos botones para cambiar la paginacion :v--}}
     {{$lenguajes->links()}}

@endsection





