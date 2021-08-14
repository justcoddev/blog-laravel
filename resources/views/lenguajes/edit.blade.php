@extends('layouts.plantilla')

@section('title', 'Lenguaje edit')
    
@section('content')
    <h1>"Podras editar un lenguaje"</h1>
   {{-- token CSRF --}}
    <form action=" {{route('lenguajes.update', $lenguaje)}}" method="POST">
        @csrf

        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$lenguaje->name}}">
        </label>
        <br>
         <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{$lenguaje->descripcion}}</textarea>
         </label>
         <br>
         <label>
         Categoria:
             <br>
         <input type="text" name="categoria" value="{{$lenguaje->categoria}}">
         </label>
         <br>
           <button type="submit">Actualizar formulario</button> 
    </form>
@endsection

