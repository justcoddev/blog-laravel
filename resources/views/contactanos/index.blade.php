@extends('layouts.plantilla')

@section('title', 'Contactanos')


  @section('content')
<h1>Dejanos un mensaje</h1>
<form action="{{route('contactanos.store')}}" method="POST">


  @csrf
  <label>
    Nombre:
    <br>
    <input type="text" name="name">
    <br>
  </label>
@error('name')
    <p><strong>{{$message}}</strong></p>
@enderror


  <label>
    Correo:
    <br>
    <input type="text" name="correo">
 <br>
  </label>
@error('correo')
    <p><strong>{{$message}}</strong></p>
@enderror


    <label>
      mensaje:
         <br>
    <textarea name="mensaje" rows="4"></textarea>
 <br>
  </label>
  @error('mensaje')
    <p><strong>{{$message}}</strong></p>
@enderror


  <br>
  <button type="submit">Enviar mensaje</button>
</form>

@if (session('info'))
    <script>
      alert("{{session('info')}}");
    </script>
@endif


@endsection
