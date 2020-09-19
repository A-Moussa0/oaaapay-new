<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->string('host_survey_id', 255);
            $table->string('survey_name', 255);
            $table->integer('response_count')->unsigned();
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
        Schema::dropIfExists('feedback_surveys');
    }
}
