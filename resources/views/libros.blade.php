@extends('layout.plantilla')
@section('titulo' , 'Libros')

@section('contenido')
    <br>
    <br>
    <span><h1>Libros almacenados </h1></span>
    <table class="table table-striped table-bordered">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Fecha de publicación</th>
            <th>Número de Páginas</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>

            @foreach ($libros as $libro)

            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->editorial}}</td>
                <td>{{$libro->fecha_de_publicacion}}</td>
                <td>{{$libro->numero_de_paginas}}</td>

                <form action="{{route('edit', $libro)}}" >
                    @csrf
                    <td><button class="btn btn-warning"  >Actualizar</button></td>
                </form>

                <form action="{{route('destroy', $libro)}}" method="post">
                    @csrf
                    @method('delete')
                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                </form>

                
            </tr>    
            @endforeach 
        </tbody>
    </table>
    {{$libros->links()}}

@endsection