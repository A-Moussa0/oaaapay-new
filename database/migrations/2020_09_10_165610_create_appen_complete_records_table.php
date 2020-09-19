<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppenCompleteRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appen_complete_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appen_initialize_id');
            $table->timestamp('generated_at');
            $table->string('action', 45);
            $table->string('ip', 130);
            $table->smallInteger('reward');
            $table->smallInteger('payout_usd');
            $table->string('job_title', 255);
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
        Schema::dropIfExists('appen_complete_records');
    }
}
