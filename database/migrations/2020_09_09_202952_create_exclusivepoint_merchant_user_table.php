<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExclusivepointMerchantUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exclusivepoint_merchant_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('user_id');
            $table->unsignedbigInteger('merchant_id');
            $table->integer('points')->unsigned();
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
        Schema::dropIfExists('exclusivepoint_merchant_user');
    }
}
