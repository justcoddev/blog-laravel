@extends('layouts.plantilla')

@section('title', 'Categorias ' . $lenguaje)

@section('content')
{{-- otra manera de hacer es colocando --}}
<h1>Bienvenido a la pagina de Lenguajes de Programación: {{$lenguaje}} </h1>


  <h1>Bienvenido a la pagina de Lenguajes de Programación: <?php echo $lenguaje;?> </h1>
@endsection
