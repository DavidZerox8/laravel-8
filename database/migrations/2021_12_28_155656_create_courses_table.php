<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            //Generamos los campos de la tabla
            $table->unsignedBigIteger('user_id');
            $table->unsignedBigIteger('category_id');
            
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');

            $table->timestamps();

            //Establecemos la relación
            $table-foreign('user_id')->references->on('users');
            $table-foreign('category_id')->references->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
