<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitySubsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('city_subs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();

            $table->integer('city_id')->unsigned();

            $table->foreign('city_id')->references('id')->on('cities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('city_subs');
    }
}
