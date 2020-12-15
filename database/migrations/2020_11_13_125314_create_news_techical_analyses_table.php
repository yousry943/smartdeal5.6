<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTechicalAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_techical_analyses', function (Blueprint $table) {
              $table->increments('id');

              $table->string('image');
              $table->string('title');
              $table->text('description');
              $table->integer('lang_id')->unsigned();
              $table->foreign('lang_id')->references('id')->on('languages')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');


                  $table->integer('categories_id')->unsigned();
                  $table->foreign('categories_id')->references('id')->on('categories_techical_analyses')
                      ->onUpdate('cascade')
                      ->onDelete('cascade');

                      $table->longText('body');


                  $table->string('status');


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
        Schema::dropIfExists('news_techical_analyses');
    }
}
