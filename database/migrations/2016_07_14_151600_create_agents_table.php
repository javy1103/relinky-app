<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bio');
            $table->string('profile_img');
            $table->string('title');
            $table->string('company');
            $table->string('phone');
            $table->string('website');
            $table->string('city');
            $table->json('active_zipcodes');
            $table->integer('experience');
            $table->json('specialties');
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
        Schema::drop('agents');
    }
}
