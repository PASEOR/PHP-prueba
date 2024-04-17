<?php

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
    return "hola paco";
    //return view('welcome');
});

Route::get('/contacto', function () {
    return "Esta es la página de contacto";
    //return view('contacto');
});

route::get('/saludo/{curso}', function($curso){
    return "Saludos desde $curso";
});




/*
Route -> clase
metodo -> get , post (formulario),  
uri -> slash
funcition -> que es lo que quiero mostar 
rutas dinamicas -> /contacto/{nombre} funtion($nombre) 
*/ 