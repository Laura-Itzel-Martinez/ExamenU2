@extends('layout.plantilla')
@section('titulo' , 'Libros')
@section('contenido')
    <br>
    <br>
    <span><h1>Libros</h1></span>
    <table class="table table-striped table-bordered">
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Fecha de publicación</th>
            <th>Número de Páginas</th>
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
            </tr>    
            @endforeach 
        </tbody>
    </table>
    {{$libros->links()}}

@endsection