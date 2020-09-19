<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackSurveyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_survey_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('feedback_survey_id');
            $table->smallInteger('reward');
            $table->string('credit_status', 45)->nullable();
            $table->timestamp('credit_date');
            $table->timestamp('answer_date')->nullable();
            $table->timestamp('open_date')->nullable();
            $table->timestamp('decline_date')->nullable();
            $table->string('decline_reason', 255)->nullable();
            $table->string('response_id', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback_survey_records');
    }
}
