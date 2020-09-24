<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('offer_type_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name', 100);
            $table->timestamp('expire_date')->nullable();
            $table->smallInteger('favorite_count')->nullable();
            $table->tinyInteger('is_online')->default(0);
            $table->tinyInteger('is_delivery')->default(0);
            $table->tinyInteger('is_store')->default(0);
            $table->tinyInteger('disabled')->default(1);
            $table->smallInteger('cost')->nullable();
            $table->tinyInteger('multiple_use')->default(0);
            $table->integer('cashback_percentage')->unsigned();
            $table->integer('bonus_cashback_percentage')->unsigned()->nullable();
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
        Schema::dropIfExists('offers');
    }
}
