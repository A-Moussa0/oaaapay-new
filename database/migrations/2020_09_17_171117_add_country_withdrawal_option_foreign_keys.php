<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryWithdrawalOptionForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('country_withdrawal_option', function (Blueprint $table) {
            $table->foreign('withdrawal_option_id')->references('id')->on('withdrawal_options');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('country_withdrawal_option', function (Blueprint $table) {
            $table->dropForeign(['withdrawal_option_id']);
            $table->dropForeign(['country_id']);
        });
    }
}
