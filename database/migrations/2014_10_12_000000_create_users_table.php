<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("last_mane")->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

/*MIGRACIONES
 comando: php artisan migrate 
 php artisan make:migration create_posts_table -> crea una migracion con el nombre de la tabla a crear, en este caso "posts"

 comandos destructivos (eliminan regristros reales )
 php artisan migrate:rollback -> ultimo lote que se ha ejecutado 
 php artisan migrate:refresh -> elimina todas las tablas y las vuelve a crear, pero no elimina las tablas que no se han creado con migraciones 
 php artisan migrate:fresh -> elimina todas las tablas y las vuelve a crear, 

comandos para crear migraciones
 php artisan make:migration add_slug_to_posts_table

 eliminar tabla
 crear migracion para eliminar una tabla
php artisan make:migration drop_posts_table

tipo de datos
 enteros
  $table->interger("nombre") / bigInterger
  $table->boolean ("is_active")
  $table->dateTime("date") ->/ fechas y hora // date o time 
  $table->decimal("amount", 8, 2) // 8 digitos y 2 decimales
  $table->double("amount", 8, 2) // 8 digitos y 2 decimales
  $table->enum("status",["active","inactive"]) // solo puede tener uno de los valores del array
  $table->float("amount", 8, 2) // 8 digitos y 2 decimales
  $table->foreignId("category_id") // entero grande sin signo, llave foranea a otra tabla
  $table->id() // entero grande sin signo, autoincremental, llave primaria
  $table->json("data") almacenar un array
  $table->string("name",100) // cadena de texto de 100 caracteres hasta 255
  $table->text("description") // texto largo 65535 characters
  $table->mediumText("content") // texto medio 16777215
  $table->longText("content") // texto muy largo 4294967295
  $table->morphs("taggable")  // relaciones polimorficas 
  $table->timestamp("created_at") // fecha y hora actual en el servidor
                                // por defecto con timezone
modificadores de columna

    $table->string("name",100)
        ->default("pablo ");    // valor por defecto si no hay nada
    $table->boolean("is_active")    
        ->default(false);
    $table->text("description")
        ->nullable(); // puede ser nulo o no
    $table->interger("edad")
        ->unsigned(); // solo valores positivos
    $table->timestamp("publisehd_at")
        ->useCurrent(); // fecha y hora actual en el servidor

        ->first(); // coloca la columna al principio

modificacion de variables en las tablas
    $table->string("name"); a ->text
    php artisan make:migration alter_to_posts_table

    $table->mediumtext("body")
        ->change(); // cambia el tipo de dato de la columna / si tiene modificadores agregarlos tambien

renombrar columna
    se necesita un paquete composer require doctrine/dbal
    php artisan make:migration rename_to_posts_table
    $table->renameColumn("name","title"); pasa de name a title

eliminar columna
    php artisan make:migration drop_to_posts_table
    $table->dropColumn("name");
    es destructivo borra la informacion de la columna y no se puede recuperar con un rollback

indice en las migraciones
    
eliminar indices
    php artisan make:migration alter_to_posts_table
    $table->dropUnique('posts_slug_inique') nombre de la llave o clave

    metodo down
    $table->unique('slug'); // crea un indice unico

llaves foraneas

eliminacion de llaves foraneas == indices
para crear llave forane deben tener un indice

php  artisan make:migration alter_to_posts_table
   op1 $table->dropForeign('posts_user_id_foreign'); // nombre de la llave foranea = indice nombre
   op2 $table->dropForeign(['user_id']); // nombre de la columna que contiene la llave foranea
       $table->dropForeign(['category_id']); // nombre de la columna que contiene la llave foranea
   down 
    $table->foreign('user_id')
          ->references('id')
          ->on('users')
          ->onDelete('cascade') // si se elimina un usuario se eliminan todos los posts
          ->onUpdate('cascade'); // si se actualiza un usuario se actualizan todos los posts
    
    $table->foreign('category_id')
         ->references('id')
         ->on('categories')
         ->onDelete('set null')// si se elimina una categoria se pone null en la columna category_id
         ->onUpdate('no action'); // si se actualiza una categoria no se actualiza la columna category_id

*/