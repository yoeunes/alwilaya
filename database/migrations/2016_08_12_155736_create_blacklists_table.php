<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlacklistsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('blacklists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('user_agent');
            $table->string('city');
            $table->string('cible');
            $table->string('os');
            $table->string('device_type');
            $table->string('target_page');
            $table->string('proxy');
            $table->string('screen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('blacklists');
    }
}
