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
           /* $table->id();*/
            $table->bigInteger('id')  //crear llaves primarias de tipo bigIncrements
                ->autoIncrement ();

            $table->string('title');

            $table->string('slug')
                ->unique();
            
            $table->longText('body');
            
            $table->timestamp("published_at");

            $table->timestamps();
            
            //indice
            //$table->primary('id');
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
