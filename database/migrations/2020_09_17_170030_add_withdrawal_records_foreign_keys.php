<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWithdrawalRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('withdrawal_records', function (Blueprint $table) {
            $table->foreign('withdrawal_request_id')->references('id')->on('withdrawal_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('withdrawal_records', function (Blueprint $table) {
            $table->dropForeign(['withdrawal_request_id']);
        });
    }
}
