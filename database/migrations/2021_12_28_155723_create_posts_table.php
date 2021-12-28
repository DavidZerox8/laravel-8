<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            
            //Generamos los campos de la tabla
            $table->unsignedBigIteger('course_id');
            $table->unsignedBigIteger('category_id');
            
            $table->string('name');
            $table->boolean('free')->default(0);

            $table->timestamps();

            //Establecemos la relación            
            $table-foreign('course_id')->references->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
