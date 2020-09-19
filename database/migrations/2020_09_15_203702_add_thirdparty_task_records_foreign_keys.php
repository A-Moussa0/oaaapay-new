<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThirdpartyTaskRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thirdparty_task_records', function (Blueprint $table) {
            $table->foreign('thirdparty_task_id')->references('id')->on('thirdparty_tasks');
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
        Schema::table('thirdparty_task_records', function (Blueprint $table) {
            $table->dropForeign(['thirdparty_task_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
