/*4 blade templade vistas extension .blade.php -> indican a laravel que eso son las plantillas de blade
        {{$pruenba}} -> imprimir variables

        {!! $prueba !!} -> imprimir html

*/

/*3 vistas resource -> views 
    todas las extensiones creadas deben ir con .blade.php
        php artisan make:provider ViewServiceProvider  -> provider para vistas
    
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