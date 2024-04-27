<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PostControler;
use Illuminate\Support\Facades\Route;
//facades es una clase que nos permite interactuar con la clase de laravel
use Illuminate\Support\Facades\DB; // para trabajar con eloquent

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

Route::get('/', HomeControler::class);  //Mostrar la vista de inicio

/*//ruta para mostrar el listado de registro 
Route::get('/posts',[PostControler::class, 'index'])
        ->name('posts.index');

//ruta para mostrar un formulario para crear un nuevo registro
Route::get('/posts/create', [PostControler::class, 'create'])
        ->name('posts.create');

//ruta para guardar el registro
Route::post('/posts', [PostControler::class, 'store'])
        ->name('posts.store');

//ruta para mostrar un registro
Route::get("/posts/{post}", [PostControler::class, 'show'])
        ->name('posts.show');

//ruta para mostrar un formulario para editar un registro
Route::get('/posts/{post}/edit', [PostControler::class, 'edit'])
        ->name('posts.edit');

//ruta para actualizar un registro
Route::put('/posts/{post}', [PostControler::class, 'update'])
        ->name('posts.update');

//ruta para eliminar un registro
Route::delete('/posts/{post}', [PostControler::class, 'destroy'])
        ->name('posts.destroy');
*/
Route::resource('posts', PostControler::class);

/*interactuar con la base de datos recuperar editar <eliminar></eliminar> */
// interactuar con la BD 1. generador de consultas de laravel 2. Eloquent ORM (Object-relational mapping)
//para verlo en el navegador extension json formater
/*Route::get('/prueba', function(){
    $categories = DB::table('categories')
                ->where('id', '>=' ,2)
                ->get(); //coleccion de registros
                //->first(); //para obtener un solo registro
    return $categories[0]->name;
});
/*Route::get('/prueba', function(){
        $categories = DB::table('categories')->find(4); //para obtener un registro con el id
        return $categories->name;
});*/

Route::get('/prueba', function(){
    $categories = DB::table('categories')
                ->where('id', '>' ,2)
                ->pluck('name', 'id'); //para obtener un solo campo de la tabla
    return $categories;
});