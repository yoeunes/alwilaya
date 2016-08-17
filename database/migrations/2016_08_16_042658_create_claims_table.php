<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('claims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objet');
            $table->text('message');
            $table->timestamp('date_envoi');
            $table->timestamp('date_reponse');
            $table->string('num_rec')->unique();
            $table->boolean('deleted');

            $table->integer('citizen_id')->unsigned();
            $table->foreign('citizen_id')->references('id')->on('citizens');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->integer('citySub_id')->unsigned();
            $table->foreign('citySub_id')->references('id')->on('city_subs');

            $table->integer('cityMap_id')->unsigned();
            $table->foreign('cityMap_id')->references('id')->on('city_maps');

            $table->integer('claimType_id')->unsigned();
            $table->foreign('claimType_id')->references('id')->on('claim_types');

            $table->integer('claimStatus_id')->unsigned();
            $table->foreign('claimStatus_id')->references('id')->on('claim_statuses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('claims');
    }
}
