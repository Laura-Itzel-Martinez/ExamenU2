<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
//use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/libros', [LibrosController::class, 'index'])->name('index');

Route::delete('/libros/{libro}', [LibrosController::class, 'destroy'])->name('destroy');

Route::get('/libros/{libro}/edit', [LibrosController::class, 'edit'])->name('edit');
Route::put('/udpate/{libro}', [LibrosController::class, 'update'])->name('update');

