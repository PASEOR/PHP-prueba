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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
           /* $table->bigInteger('id')  //crear llaves primarias de tipo bigIncrements
                ->autoIncrement ()
                ->unsigned();*/
            //$table->bigIncrements('id');

            $table->string('title');

            $table->string('slug')
                ->unique(); //campo unico
            
            $table->longText('body');

            /*$table->bigInteger('user_id') //levar registro de quien creo el post para llave clave foranea
                ->unsigned(); 
            $table->insignedBigInterger('user_id');
            //clave foranea que referencia a la tabla users 
            $table->foreign('user_id')
                ->references('id')
                ->on('users')           
                ->onDelete('cascade'); //si se elimina el usuario se eliminan los post*/

            /*otra forma de crear una llave foranea
            $table->foreignId('user_id') //entra en la tabla users
                ->constrained() //agrega estas (->references('id') y ->on('users')) restricciones 
                ->onDelete('cascade') //si se elimina el usuario se eliminan los post 
                ->onUpdate('cascade'); //si se actualiza el usuario se actualizan los post
            //restrigciones de llave foranea crear primero las tablas y despues las rectricciones 
            */
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade') // si se elimina un usuario se eliminan todos los posts
                ->onUpdate('cascade'); // si se actualiza un usuario se actualizan todos los posts
            
            $table->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade')// si se elimina una categoria se pone null en la columna category_id
                ->onUpdate('cascade'); // si se actualiza una categoria no se actualiza la columna category_id


            $table->timestamp("published_at");

            $table->timestamps();
            
            //indice
            //$table->primary(['id','slug'']); / llave primaria compuesta
            /*indices unicos acilitar la busqueda de datos
                table->index("title") //indice simple, solo para una columna
                table->fullText("body") //indice de texto completo
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
