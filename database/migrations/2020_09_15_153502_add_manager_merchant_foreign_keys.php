<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddManagerMerchantForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manager_merchant', function (Blueprint $table) {
            $table->foreign('merchant_id')->references('id')->on('merchants');
            $table->foreign('manager_id')->references('id')->on('account_managers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manager_merchant', function (Blueprint $table) {
            $table->dropForeign(['merchant_id']);
            $table->dropForeign(['manager_id']);
        });
    }
}
