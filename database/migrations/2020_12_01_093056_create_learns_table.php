<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
             $table->integer('lang_id')->unsigned();
             $table->foreign('lang_id')->references('id')->on('languages')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');


           $table->integer('categories_id')->unsigned();
           $table->foreign('categories_id')->references('id')->on('learncategories')
               ->onUpdate('cascade')
               ->onDelete('cascade');
                 $table->Text('description');

               $table->longText('body');
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
        Schema::dropIfExists('learns');
    }
}
