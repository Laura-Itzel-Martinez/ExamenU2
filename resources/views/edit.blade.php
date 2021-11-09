@extends('layout.plantilla')
@section('titulo' , 'Actualizar')

@section('contenido')
   <h1 class="display-6">Actualizar datos de libros</h1>

   <form action="{{route('update', $libro)}}" method="post">

    @csrf
    @method('put')

        <label for="">Titulo:
            <input type="text" name="titulo" class="form-control" value="{{$libro->titulo}}">
        </label>
        <br>
        <label for="">Autor:
            <input type="text" name="autor"  class="form-control" value="{{$libro->autor}}">
        </label>
        <br>
        <label for="">Editorial:
            <input type="text" name="editorial"   class="form-control" value="{{$libro->editorial}}">
        </label>
        <br>
        <label for="">Fecha de publicación:
            <input type="date" name="fecha_de_publicacion"  class="form-control"  value="{{$libro->fecha_de_publicacion}}">
        </label>
        <br>
        <label for="">Número de Páginas:
            <input type="number" name="numero_de_paginas"   class="form-control" value="{{$libro->numero_de_paginas}}">
        </label>
<br>
        <button class="btn btn-info">Actualizar datos</button>
        
   </form>

  

    
@endsection