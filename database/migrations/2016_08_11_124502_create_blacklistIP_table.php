<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlacklistIPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blackListIPs', function (Blueprint $table) {

            $table->increments('id');
            $table->mediumInteger('ip_address');
            $table->mediumInteger('screen_size');
            $table->string('user agent');
            $table->string('ville');
            $table->string('page_cible');
            $table->string('OS');
            $table->string('deviceType');
            $table->string('proxy');
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
        Schema::drop('blackListIPs');
    }
}
