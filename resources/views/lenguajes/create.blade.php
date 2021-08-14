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
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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
         <input type="text" name="categoria" value="{{old('categoria')}}">
         </label>
         <br>
          @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
           <button type="submit">Enviar formulario</button> 
    </form>
@endsection

