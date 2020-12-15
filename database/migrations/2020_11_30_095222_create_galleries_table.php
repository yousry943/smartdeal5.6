<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('image');

          $table->integer('lang_id')->unsigned();
          $table->foreign('lang_id')->references('id')->on('languages')
              ->onUpdate('cascade')
              ->onDelete('cascade');


              $table->integer('categorie_id')->unsigned();
              $table->foreign('categorie_id')->references('id')->on('gallerycategories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
