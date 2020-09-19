<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawal_options', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('minimum_point')->unsigned();
            $table->tinyInteger('enabled')->default(0);
            $table->smallInteger('delivery_days')->unsigned();
            $table->tinyInteger('automated');
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
        Schema::dropIfExists('withdrawal_options');
    }
}
