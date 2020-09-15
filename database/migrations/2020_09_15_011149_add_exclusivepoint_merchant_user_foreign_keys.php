<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExclusivepointMerchantUserForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exclusivepoint_merchant_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('merchant_id')->references('id')->on('merchants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exclusivepoint_merchant_user', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['merchant_id']);
        });
    }
}
