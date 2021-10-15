<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libros;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $libros=new Libros();
            $libros->titulo = 'Blanca Nieves';
            $libros->autor = 'Blanc Bueno';
            $libros->editorial = 'Porrua';
            $libros->fecha_de_publicacion = '2015/09/23';
            $libros->numero_de_paginas = 5;
            $libros->save();

            

    }
}
