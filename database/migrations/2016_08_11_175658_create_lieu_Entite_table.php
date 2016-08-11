<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuEntiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieuEntites', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('commune_id')->unsigned();
        $table->foreign('commune_id')->references('id')->on('lieuVilles');
        $table->string('name');
        $table->string('display_name');
        $table->mediumText('description');
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
        Schema::drop('lieuEntites');
    }
}
