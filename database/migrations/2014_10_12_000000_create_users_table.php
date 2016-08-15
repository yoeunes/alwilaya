<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo');
            $table->boolean('active')->default(true);;
            $table->boolean('deleted')->default(false);;
            $table->string('cin');
            $table->string('tel_mobile');
            $table->string('tel_fixe');
            $table->string('adresse');
            $table->enum('sexe', [ 'male', 'female' ]);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }
}
