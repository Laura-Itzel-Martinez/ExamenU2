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
}
