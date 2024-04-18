<?php

use App\Http\Controllers\HomeControler;
use App\Http\Controllers\PostControler;
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

Route::get('/', HomeControler::class);  //Mostrar la vista de inicio

//ruta para mostrar el listado de registro 
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


/*3 vistas resource -> views 
    todas las extensiones creadas deben ir con .blade.php


    
*/




        /*2controladores 
php artisan make:controller NombreController (PostControler)
Controlador para cada ruta 


Route::resource('post', PostController::class)
        ->only['index', 'show'];

Route::resource('articuler', UserController::class)
        ->parameters(['articuler' => 'post'])
        ->names('post');

route resource, agrupar rutas
grupo de rutas 
    Route::prefix('posts')->name('post.')->controller(PostController::class)->group(funtion(){
        Route::get('/', 'index')
                ->name('index');
        Route::get('/create, 'create')
                ->name('create');
        Route::post('/', 'store')
                ->name('store');
        Route::get('/{post}', 'show')
                ->name('show');
        Route::get('/{post}/edit', 'edit')  
                ->name('edit');
        Route::put('/{post}', 'update') 
                ->name('update');
        Route::delete('/{post}', 'destroy') 
                ->name('destroy');
    });

*/

/*1
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