<?php

use App\View\Components\Tarjeta;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome', [
        'contenido' => [
            ['Columna #1' => "orange", 'Columna #2' => 2, 'Columna #3' => 3],
            ['col1' => "yellow", 'col2' => 2, 'col3' => 3],
            ['col1' => "blue", 'col2' => 2, 'col3' => 3]
        ],
        'animales' => [
            ['Nombre' => "Snoopy", 'Especie' => "Perro", 'Precio' => 30000,'Stock'=>4],
            ['Nombre' => "Garfield", 'Especie' => "Gato", 'Precio' => 30000,'Stock'=>2],
            ['Nombre' => "Scooby", 'Especie' => "Perro", 'Precio' => 60000,'Stock'=>1],
            ['Nombre' => "Marmaduke", 'Especie' => "Perro", 'Precio' => 40000,'Stock'=>5],
        ]
    ]);
});