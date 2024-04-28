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

/*Route::get('/prueba', function(){
    $categories = DB::table('categories')
                ->where('id', '>' ,2)
                ->pluck('name', 'id'); //para obtener un solo campo de la tabla
    return $categories;
});*/


//factory para crear registros de manera aleatoria en la base de datos 
// \app\Models\Post::factory()->count(50)->create(); //crear 50 registros esto se coloca en la capeta database/seeders/databaseseeder.php
/*para recuperar muchos datos, trabajar con datos truncados de 100 en 100 o una cantidad adecuada */

/*Route::get('/prueba', function(){
        
        DB::table('users')
                ->orderBy('id', 'des') //para ordenar los registros por cualquier campo
                //>chunkById(100, function($users){ //metodo chunkById para trabajar actualizar los registro
                ->chunk(100, function($users){ //metodo chunk para trabajar con muchos datos
                    foreach($users as $user){  
                        echo $user->name . '<br>';
                    }
                });
});*/

//trabajar con data truncada
/*Route::get('/prueba', function(){
        DB::table('users')
        ->orderBy('id') //para ordenar los registros 
        ->lazy()->each(function($user){  //metodo lazy devuelve una coleccion de datos
                echo $user->name . '<br>';
        }); 
});*/

//generador de consultas cuantos tados hay en la tabla 
/*Route::get('/prueba', function(){
        /*$users = DB::table('users')
                ->max('id'); //para obtener el maximo valor de un campo
                ->min('id'); //para obtener el minimo valor de un campo
                ->avg('id'); //para obtener el promedio de un campo
                ->count(); //para contar los registros de la tabla
        return $users;*/
        /*if(DB::table('id',5)->exists()){
           echo 'El registro existe';  
        }else{
            echo 'El registro no existe';
        }
        if(DB::table('id',5)->doesntExist()){
                echo 'El registro no existe';
             }else{
                echo 'El registro existe';
             }
});   */

//especificar que cmapo se quiere recuperar
/*Route::get('/prueba', function(){
        $users = DB::table('users')
                ->select('name', 'email as correo',) //para seleccionar los campos que se quieren recuperar
                ->get(); //para obtener los registros
        return $users;
});*/

//utilizar sentencias sql en laravel
/*Route::get('/prueba', function(){
        $users = DB::table('users')
                ->select('name', 'email as correo')// para seleccionar los campos que se quieren recuperar
                ->selectRaw('concat(name, " ", email) as nombre_completo') //para concatenar los campos
                //->where('id', '>', 5) //para filtrar los registros
                ->whereRaw('id >= 2 and id <= 5 ') //para filtrar los registros con sentencias sql
                ->orHavingRaw()
                ->orderByRaw()
                ->groupByRaw()
                ->get(); //para obtener los registros
        return $users;
});*/

//datos cruzados
/*Route::get('/prueba', function(){
        $users = DB::table('posts')
                ->join('users', 'posts.user_id', '=', 'users.id') //para hacer un join
                ->join('categories', 'posts.category_id', '=', 'categories.id') //para hacer un join
                ->select('posts.*', 'users.name as autor', 'categories.name as categoria') // post.* muestra toda la informacion de la tabla post  para seleccionar los campos que se quieren recuperar
                ->get(); //para obtener los registros
        return $users;
});*/

//clausula where
/*Route::get('/prueba', function(){
        $users = DB::table('posts')
                ->where('id', 1) //para hacer un where
                ->where('id', '<>', 5) //trae todos los registros excepto el 5
                ->where('name', 'like', '%nombre%') // busca los registros que contengan la palabra clave
                ->where([ //para hacer un where con varios campos
                        ['id', '>', 5],
                        ['name', 'like', '%nombre%']
                ])
                ->get(); //para obtener los registros
});*/

//clausula orWhere
/*Route::get('/prueba', function(){
        $users = DB::table('posts')
                ->where('id', 'like', '%clave%') //para hacer un where buscando la palabra clave
                ->orWhere('id', 'like', '%clave%') //para hacer un orWhere buscando la palabra clave
                ->get(); //para obtener los registros
});*/

//clausula whereNot 
/*Route::get('/prueba', function(){
        $users = DB::table('posts')
                ->whereNot('id', 'like', '%clave%') //para hacer un where buscando la palabra clave a excluir
                ->get(); //para obtener los registros
});*/

//clausula adicionales
/*Route::get('/prueba', function(){

        return DB::table('posts')
                ->whereBetween('id', [2, 5]) // para hacer un where entre un rango de valores
                ->whereNotBetween('id', [2, 5]) // para hacer un where entre un rango de valores excluyendo el rango
                ->whereIn('id', [2, 5]) // para hacer un where en un conjunto de valores colocados en un array
                ->whereNotIn('id', [2, 5]) // para hacer un where en un conjunto de valores excluyendo los valores colocados en un array
                ->whereNull('variable') // para hacer un where en un campo nulo
                ->WhereNotNull('variable') // para hacer un where en un campo no nulo trae los registros que no esten nulos
                ->whereDate('created_at', '>' ,'2021-09-01') // para hacer un where en una fecha 
                ->whereMonth('created_at', 9) // para hacer un where en un mes
                ->whereDay('created_at', 15) // para hacer un where en un dia
                ->whereYear('created_at', 2021) // para hacer un where en un año
                ->whereTime('created_at', '>', '12:00:00') // para hacer un where en una hora
                ->whreColumn('created_at', 'updated_at') // para hacer un where en dos campos iguales
                ->get(); //para obtener los registros
});*/

//agrupacion logica
/*Route::get('/prueba', function(){

        return DB::table('posts')
                ->where('id', '>=' ,1)
                ->Where(function($query){
                        $query->where('email', 'like' , '%nombre%')
                                ->orWhere('name', 'like', '%nombre%');
                })
                ->get(); //para obtener los registros
});*/

//ordenar registro
/*Route::get('/prueba', function(){

        $users = DB::table('posts')
                ->orderBy('id', 'desc')
                ->latest("id") // ordena de manera descendente
                ->oldest("id") // ordena de manera ascendente
                ->inRandomOrder("id") // ordena de manera aleatoria
                //->get(); //para obtener los registros
        
        $users->reorder()->get(); //para reordenar los registros y si quiero hacer esto el get debe ir al final

});*/

//agrupar varios registros
/*Route::get('/prueba', function(){

        $users = DB::table('posts')
                ->select('user_id', DB::raw('count(*) as total')) // para seleccionar los campos que se quieren recuperar
                ->groupBy('user_id') //para agrupar los registros 
                ->having('total', '>', 1) //para hacer un having permite realizar filtros pero con campos que se crearon despues 
                ->get(); //para obtener los registros
        return $users;
});*/

//limite y compensacion de registros 
/*Route::get('/prueba', function(){

        $users = DB::table('posts')
                ->skip(5) //para saltar los primeros 5 registros
                ->take(10) //para tomar los primeros 10 registros
                ->offset(5) //para saltar los primeros 5 registros
                ->limit(10) //para tomar los primeros 10 registros
                ->get(); //para obtener los registros
                
        return $users;
});*/


//clausulas condicionales
/*Route::get('/prueba', function(){

        $prueba = false;
        $prueba = 15; // ->when($prueba, function($query, $prueba)

        $users = DB::table('users')
                ->when($prueba, function($query){ //evalua valores booleanos
                        return $query->where('id', '>' , 10);
                })
                ->get(); //para obtener los registros
                
        return $users;
});*/

//insertar registros en la base de datos
/*Route::get('/prueba', function(){
        //DB::table('users')->insert([ //inserta registro
        /*DB::table('users')->insertOrIgnore([ //inserta registro si hay un error lo ignora
                [
                        'name' => 'nombre',
                        'email' => 'correo',
                        'password' => bycrpt('clave')
                ],
                [
                        'name' => 'nombre',
                        'email' => 'correo',
                        'password' => bycrpt('clave')
                ]
        ]); //para insertar un o varios registros   
        
        //otro
        DB::table('users')->upsert(  //insertar nuevos registros y si existe actualiza los registros existentes
                [
                        [
                                'name' => 'nombre',
                                'last_name' => 'apellido',
                                'email' => 'correo',
                        ],
                        [
                                'email' // campo para buscar el registro
                        ]
                        [
                                'name' => 'new_nombre',
                                'last_name' => 'new_apellido',
                                'email' => 'new_correo',]
                ],
                
        ); //para insertar un o varios registros
        
});*/

//actualizar registros en la base de datos
/*Route::get('/prueba', function(){

        /*DB::table('users')
                ->where('id', 1)
                ->update([
                        'name' => 'nombre',
                        'email' => 'correo',
                        'password' => bycrpt('clave')
                ]); //para actualizar un registro
        
        //otro
        DB::table('users')
                ->uodateOrInsert( //actualizar o insertar un registro
                        [
                                "email" => "correo"     //filtro para buscar el registro si no existe lo inserta
                        ].
                        [
                                'name' => 'nombre', //campos a actualizar
                                'email' => 'correo',
                                'password' => bycrpt('clave')
                        ]
                ]); 
});*/

//incrementar y decrementar registros en la base de datos
/*Route::get('/prueba', function(){

        DB::table('users')
                ->where('id', 1) //registro a actualizar
                ->increment('rating', 5); //para incrementar un campo
        
        DB::table('users')
                ->where('id', 1)
                ->decrement('rating', 5); //para decrementar un campo
});*/

//eliminar registros en la base de datos
/*Route::get('/prueba', function(){

        DB::table('users')
                ->where('id', 1)
                ->delete(); //para eliminar un registro
        
        DB::table('users')
                ->truncate(); //para eliminar todos los registros de la tabla
});*/

//paginacion de registros
/*Route::get('/prueba', function(){

        $users = DB::table('users')
                ->paginate(10); //muestra los registros de 10 en 10
                ->paginate(10, ['*'], 'page'); //muestra los registros de 10 en 10, cantidad de columnas, nombre de la pagina
                ->simplePaginate(10); //muestra los registros de 10 en 10 sin los links de la paginacion

        //return $users;
        return view('prueba', compact('users'));
});*/