<?php

namespace Database\Factories;

use App\Models\Libros;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibrosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Libros::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=>$this->faker->sentence(),
            'autor'=>$this->faker->sentence(),
            'editorial' =>$this->faker->sentence(),
            'fecha_de_publicacion' =>$this->faker->date(),
            'numero_de_paginas' =>$this->faker->integer()

          
           
        ];
    }
}
