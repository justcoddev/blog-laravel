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

  <label>
    Correo:
    <br>
    <input type="text" name="correo">
 <br>
  </label>

    <label>
      mensaje:
         <br>
    <textarea name="mensaje" rows="4"></textarea>
 <br>
  </label>
  <br>
  <button type="submit">Enviar mensaje</button>
</form>
@endsection

