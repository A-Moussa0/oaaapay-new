<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOfferRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offer_records', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offer_records_foreign_keys', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['offer_id']);
        });
    }
}
