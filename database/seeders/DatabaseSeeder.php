<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libros;
use Database\Factories\LibrosFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Libros::class);
        Libros::factory(100)->create();

        

    }
}
