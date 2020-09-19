<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawal_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('withdrawal_request_id');
            $table->string('status', 45);
            $table->string('decline_reason', 100)->nullable();
            $table->string('notes', 255)->nullable();
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
        Schema::dropIfExists('withdrawal_records');
    }
}
