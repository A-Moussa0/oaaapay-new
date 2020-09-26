<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_manager_id');
            $table->unsignedBigInteger('industry_id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->tinyInteger('exclusivepoints_enabled')->default(0);
            $table->tinyInteger('exclusivepoints_percentage')->unsigned()->nullable();
            $table->timestamp('onboard_date')->nullable();
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
        Schema::dropIfExists('merchants');
    }
}
