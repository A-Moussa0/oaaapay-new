<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppenInitializeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appen_initialize', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');        
            $table->timestamp('generated_at');
            $table->string('transaction_id', 255);
            $table->string('action', 45);
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
        Schema::dropIfExists('appen_initialize');
    }
}
