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


*/