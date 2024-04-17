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
    return "hola paco del inicio";
    //return view('welcome');
});

//ruta para mostrar el listado de registro 
Route::get('/posts', function(){
    return "hola desde la pagina de posts";
});

//ruta para mostrar un formulario para crear un nuevo registro
Route::get('/posts/create', function(){
    return "aqui se muestra el formulario para crear un post";
});

//ruta para guardar el registro
Route::post('/posts', function(){
    return "aqui se guarda el post";
});

//ruta para mostrar un registro
Route::get('/posts/{post}', function($post){
    return "aqui se muestra el post: $post";
});

//ruta para mostrar un formulario para editar un registro
Route::get('/posts/{post}/edit', function($post){
    return "aqui se muestra el formulario para editar el post : $post";
});

//ruta para actualizar un registro
Route::put('/posts/{post}', function($post){
    return "aqui se actualiza el post: $post";
});

//ruta para eliminar un registro
Route::delete('/posts/{post}', function($post){
    return "aqui se elimina el post: $post";
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
metodo -> put (actualizar), delete (eliminar)
uri -> slash
funcition -> que es lo que quiero mostar 
rutas dinamicas -> /contacto/{nombre} funtion($nombre) 
ruta opcional -> /contacto/{nombre}{category?}, funtion($nombre, $category = null)
comando artisan -> php artisan route:list, r:l; ver todas las rutas
            ->php artisan r:l --path=api, ver las rutas de la api
            ->php artisan r:l --except-vendor, only-vendor
            ->php artisan -route:cache; cache de rutas
            -> php artisan route:clear; limpiar cache de rutas
las rutas estan protegidos por el middleware web, se pueden proteger con el middleware auth
)->name('cursos.show'); nombre de la ruta
rutas con parametros -> route('cursos.show', 4)
*/ 