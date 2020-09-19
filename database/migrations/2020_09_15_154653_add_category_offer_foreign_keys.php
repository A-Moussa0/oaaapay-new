<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryOfferForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_offer', function (Blueprint $table) {
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_offer', function (Blueprint $table) {
            $table->dropForeign(['offer_id']);
            $table->dropForeign(['category_id']);
        });
    }
}
