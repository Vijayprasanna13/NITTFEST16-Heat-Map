<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('arch');
            $table->string('chem');
            $table->string('civ');
            $table->string('cse');
            $table->string('eee');
            $table->string('ece');
            $table->string('ice');
            $table->string('mech');
            $table->string('meta');
            $table->string('prod');
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
        Schema::drop('locations');
    }
}
