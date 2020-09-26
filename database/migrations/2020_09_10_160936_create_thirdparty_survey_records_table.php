<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdpartySurveyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirdparty_survey_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('thirdparty_survey_id');
            $table->string('transaction_id', 255)->unique();
            $table->string('uuid', 255)->unique();
            $table->string('action', 45);
            $table->string('ip', 130)->nullable();
            $table->smallInteger('reward');
            $table->string('status', 45)->nullable();
            $table->timestamp('credit_date');
            $table->timestamp('declined_at')->nullable();
            $table->smallInteger('duration')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->tinyInteger('rating_count')->nullable();
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
        Schema::dropIfExists('thirdparty_survey_records');
    }
}
