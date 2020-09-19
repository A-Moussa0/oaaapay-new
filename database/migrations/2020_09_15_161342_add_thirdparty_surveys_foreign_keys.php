<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThirdpartySurveysForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thirdparty_surveys', function (Blueprint $table) {
            $table->foreign('thirdparty_id')->references('id')->on('thirdparties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thirdparty_surveys', function (Blueprint $table) {
            $table->dropForeign(['thirdparty_id']);
        });
    }
}
