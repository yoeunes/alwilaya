<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecejointeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pjointes', function (Blueprint $table) {


                $table->increments('id');
                $table->string('display_name');
                $table->string('link');
                $table->string('type');
                $table->integer('size');
                $table->string('owner_type');
                $table->integer('owner_id')->unsigned();
                $table->foreign('owner_id')->references('id')->on('reclamations');
                $table->integer('owner_type')->unsigned();
                $table->foreign('owner_type')->references('id')->on('reclamationTypes');



            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Pjointes');
    }
}
