<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdpartySurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirdparty_surveys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('thirdparty_id');
            $table->string('name', 100);
            $table->smallInteger('reward');
            $table->string('country', 100)->nullable();
            $table->decimal('payout_usd', 15, 4);
            $table->string('url', 1999);
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
        Schema::dropIfExists('thirdparty_surveys');
    }
}
