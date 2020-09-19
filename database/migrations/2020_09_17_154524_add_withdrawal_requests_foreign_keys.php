<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWithdrawalRequestsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('withdrawal_requests', function (Blueprint $table) {
            $table->foreign('withdrawal_option_id')->references('id')->on('withdrawal_options');
            $table->foreign('user_withdrawal_info_id')->references('id')->on('user_withdrawal_infos');
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
        Schema::table('withdrawal_requests', function (Blueprint $table) {
            $table->dropForeign(['withdrawal_option_id']);
            $table->dropForeign(['user_withdrawal_info_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
