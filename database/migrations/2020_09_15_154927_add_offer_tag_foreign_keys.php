<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOfferTagForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offer_tag', function (Blueprint $table) {
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offer_tag', function (Blueprint $table) {
            $table->dropForeign(['offer_id']);
            $table->dropForeign(['tag_id']);
        });
    }
}
