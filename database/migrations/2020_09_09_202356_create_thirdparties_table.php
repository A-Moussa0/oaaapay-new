<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirdparties', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->tinyInteger('has_tasks');
            $table->tinyInteger('has_surveys');
            $table->tinyInteger('commission_percentage')->unsigned();
            $table->string('payment_method', 100);
            $table->string('payment_term', 100);
            $table->decimal('total_revenue_usd', 15, 4)->nullable()->default(0);
            $table->decimal('current_revenue_usd', 15, 4)->nullable()->default(0);
            $table->decimal('last_month_revenue_usd', 15, 4)->nullable()->default(0);
            $table->tinyInteger('disabled')->default(1);
            $table->string('icon', 1999)->nullable();
            $table->string('logo', 1999)->nullable();
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
        Schema::dropIfExists('third_parties');
    }
}
