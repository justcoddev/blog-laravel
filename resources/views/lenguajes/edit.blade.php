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
            <input type="text" name="name" value="{{old('name', $lenguaje->name)}}">
        </label>
          @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
         <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $lenguaje->descripcion)}}</textarea>
         </label>
           @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
         <br>
         <label>
         Categoria:
             <br>
         <input type="text" name="categoria" value="{{old('categoria', $lenguaje->categoria)}}">
         </label>
         <br>
           @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
           <button type="submit">Actualizar formulario</button> 
    </form>
@endsection

