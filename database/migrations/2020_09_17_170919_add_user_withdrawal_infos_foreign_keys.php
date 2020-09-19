<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserWithdrawalInfosForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_withdrawal_infos', function (Blueprint $table) {
            $table->foreign('withdrawal_option_id')->references('id')->on('withdrawal_options');
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
        Schema::table('user_withdrawal_infos', function (Blueprint $table) {
            $table->dropForeign(['withdrawal_option_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
