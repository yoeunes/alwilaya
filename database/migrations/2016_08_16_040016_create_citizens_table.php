<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizensTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('citizens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('tel');
            $table->text('adresse_1');
            $table->text('adresse_2');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('pays');
            $table->string('cin');
            $table->string('raison_sociale');

            $table->integer('citizenType_id')->unsigned();

            $table->foreign('citizenType_id')->references('id')->on('citizen_types');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('citizens');
    }
}
