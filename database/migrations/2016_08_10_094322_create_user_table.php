<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name')->unique();
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo_profile');
            $table->boolean('deleted');
            $table->boolean('actif');
            $table->string('sexe');
            $table->string('adresse');
            $table->boolean('cin');
            $table->mediumInteger('tel_fixe');
            $table->mediumInteger('tel_mobile');
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
        Schema::drop('utilisateurs');
    }
}
