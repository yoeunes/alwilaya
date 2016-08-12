<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimAlertsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('claim_alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->integer('alerttype_id')->unsigned();

            $table->foreign('alerttype_id')->references('id')->on('alert_types');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('claim_alerts');
    }
}
