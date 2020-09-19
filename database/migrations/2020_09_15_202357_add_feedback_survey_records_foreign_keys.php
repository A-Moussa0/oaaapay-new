<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeedbackSurveyRecordsForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback_survey_records', function (Blueprint $table) {
            $table->foreign('feedback_survey_id')->references('id')->on('feedback_surveys');
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
        Schema::table('feedback_survey_records', function (Blueprint $table) {
            $table->dropForeign(['feedback_survey_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
