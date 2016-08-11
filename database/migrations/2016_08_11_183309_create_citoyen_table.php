<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitoyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citoyens', function (Blueprint $table) {
        $table->increments('id');
         $table->integer('citoyen_type_id')->unsigned();
         $table->foreign('citoyen_type_id')->references('id')->on('citoyenTypes');
        $table->string('email')->unique();
        $table->string('raison_social');
        $table->string('nom');
        $table->string('prenom');
        $table->string('sexe');
        $table->string('ville');
        $table->string('pays');
        $table->string('cin');
        $table->string('adresse_1');
        $table->string('adresse_2');
        $table->mediumInteger('telephone');
        $table->string('code_postal');
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
        Schema::drop('citoyens');
    }
}
