<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWebPackagesForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_packages', function (Blueprint $table) {
            $table->foreign('duration_id')->references('id')->on('advertisement_durations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_packages', function (Blueprint $table) {
            $table->dropForeign(['duration_id']);
        });
    }
}
