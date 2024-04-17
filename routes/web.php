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

/*Route::get('/cursos/informacion', function () {
    return "Informacion del curso";
});
*/
Route::get('/cursos/{tic}', function ($tic) {
    return "Bienvenido al curso $tic";
});

/*
route::get('/saludo/{curso}', function($curso){
    return "Saludos desde $curso";
})->whereAlphaNumeric('curso');
//->where('curso', '[A-Za-z]+');
*/

/*
Route -> clase
metodo -> get , post (formulario),  
uri -> slash
funcition -> que es lo que quiero mostar 
rutas dinamicas -> /contacto/{nombre} funtion($nombre) 
ruta opcional -> /contacto/{nombre}{category?}, funtion($nombre, $category = null)

*/ 