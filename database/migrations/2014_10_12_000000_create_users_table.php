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


*/