<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('reclamation_type_id')->unsigned();
        $table->foreign('reclamation_type_id')->references('id')->on('reclamationTypes');
         $table->integer('lieu_ville_id,')->unsigned();
        $table->foreign('lieu_ville_id,')->references('id')->on('lieuVilles');
        $table->integer('lieu_entite_id')->unsigned();
        $table->foreign('lieu_entite_id')->references('id')->on('lieuEntites');
         $table->integer('lieu_map_id')->unsigned();
        $table->foreign('lieu_map_id')->references('id')->on('lieuMaps');
        $table->string('objet');
        $table->string('message');
        $table->string('status');
        $table->string('ville');
        $table->string('pays');
        $table->string('cin');
        $table->timestamp('date_envoi');
        $table->timestamp('date_reponse');
        $table->boolean('deleted');
        $table->mediumInteger('num_rec');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reclamations');
    }
}
