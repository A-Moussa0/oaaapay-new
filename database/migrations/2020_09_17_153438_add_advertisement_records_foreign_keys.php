<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdvertisementRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advertisement_records', function (Blueprint $table) {
            $table->foreign('advertisement_id')->references('id')->on('advertisements');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertisement_records', function (Blueprint $table) {
            $table->dropForeign(['advertisement_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
