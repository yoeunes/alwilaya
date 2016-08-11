<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamationAlertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamationAlerts', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('message');
            $table->integer('alertType_id')->unsigned();
            $table->foreign('alertType_id')->references('id')->on('alertTypes')->onDelete('set null');
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
        Schema::drop('reclamationAlerts');
    }
}
