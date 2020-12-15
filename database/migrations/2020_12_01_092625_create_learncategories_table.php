<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearncategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learncategories', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')->references('id')->on('languages')
                ->onUpdate('cascade')
                ->onDelete('cascade');


                $table->integer('menuCategory_id')->unsigned();
                $table->foreign('menuCategory_id')->references('id')->on('menu_categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

           $table->string('name');

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
        Schema::dropIfExists('learncategories');
    }
}
