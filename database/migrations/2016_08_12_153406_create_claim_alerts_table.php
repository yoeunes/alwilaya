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
            $table->integer('claimtype_id')->unsigned();

            $table->foreign('claimtype_id')->references('id')->on('claim_types');

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
