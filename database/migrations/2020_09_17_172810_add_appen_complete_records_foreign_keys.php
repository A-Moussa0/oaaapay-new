<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAppenCompleteRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appen_complete_records', function (Blueprint $table) {
            $table->foreign('appen_initialize_id')->references('id')->on('appen_initialize');
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
        Schema::table('appen_complete_records', function (Blueprint $table) {
            $table->dropForeign(['appen_initialize_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
