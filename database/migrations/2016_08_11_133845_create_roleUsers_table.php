<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roleUsers', function (Blueprint $table) {

        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('utilisateurs')->onDelete('set null');
        $table->integer('role_id')->unsigned();
        $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
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
        Schema::drop('roleUsers');
    }
}
