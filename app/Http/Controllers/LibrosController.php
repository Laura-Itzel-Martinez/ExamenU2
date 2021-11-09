<?php

namespace App\Http\Controllers;
use App\Models\Libros;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libros::paginate(10);
        return view('libros',compact('libros'));
    }
    public function destroy(Libros $libro){
        $libro->delete();
        return redirect()->route('index');
    }
    public function edit(Libros $libro){
        return view('edit', compact('libro'));
       
    }
     public function update(Request $request , Libros $libro){
        
        $libro->titulo=$request->titulo;
        $libro->autor=$request->autor;
        $libro->editorial=$request->editorial;
        $libro->fecha_de_publicacion=$request->fecha_de_publicacion;
        $libro->numero_de_paginas=$request->numero_de_paginas;

        $libro->save();
        return redirect()->route('index',$libro); 
    }
    
}
