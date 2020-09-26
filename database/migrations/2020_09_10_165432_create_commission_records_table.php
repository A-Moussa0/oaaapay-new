<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('referral_id');
            $table->integer('sourcable_id');
            $table->string('sourcable_type', 100);
            $table->smallInteger('amount_points');
            $table->smallInteger('percentage')->nullable(); // Total Percentage from the offer cost/receipt. (calculated by multiplying the dynamic percentage defined in admin panel for offer commissions * the specific cashback percentage of an offer) //Only applicable if from an offer.
            $table->uuid('uuid')->nullable(); // only applicable if the transaction came from a thirdparty.
            $table->string('status', 100);
            $table->timestamp('credit_date');            
            $table->timestamp('declined_at')->nullable();            
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
        Schema::dropIfExists('commission_records');
    }
}
