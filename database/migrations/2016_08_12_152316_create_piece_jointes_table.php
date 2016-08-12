<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePieceJointesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('piece_jointes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('display_name');
            $table->string('link');
            $table->string('type');
            $table->double('size');

            $table->morphs('owner');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('piece_jointes');
    }
}
