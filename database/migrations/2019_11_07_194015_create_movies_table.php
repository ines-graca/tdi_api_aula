<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

//'title', 'year', 'image', 'rating', 'category_id', 'country_id', 'director_id'

    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('year');
            $table->integer('rating');
            $table->string('image');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categorys');

            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countrys');

            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('directors');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
