<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddThirdpartySurveyRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thirdparty_survey_records', function (Blueprint $table) {
            $table->foreign('thirdparty_survey_id')->references('id')->on('thirdparty_surveys');
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
        Schema::table('thirdparty_survey_records', function (Blueprint $table) {
            $table->dropForeign(['thirdparty_survey_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
