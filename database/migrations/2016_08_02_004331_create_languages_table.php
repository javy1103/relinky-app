<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function(Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('value');
        });

        Schema::create('language_user', function(Blueprint $table){
          $table->integer('language_id');
          $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
          $table->integer('user_id');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('language_user');
        Schema::drop('languages');
    }
}
