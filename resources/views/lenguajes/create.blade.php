@extends('layouts.plantilla')

@section('title', 'Lenguaje create')
    
@section('content')
    <h1>"Podras estudiar un lenguaje"</h1>
   {{-- token CSRF --}}
    <form action=" {{route('lenguajes.store')}}" method="POST">
        @csrf


        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
         <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
         </label>
         <br>
         <label>
         Categoria:
             <br>
         <input type="text" name="categoria">
         </label>
         <br>
           <button type="submit">Enviar formulario</button> 
    </form>
@endsection

