<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('country_id');
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('marital_status', 45)->nullable();
            $table->smallInteger('kids')->nullable();
            $table->string('house', 45)->nullable();
            $table->string('work_industry', 45)->nullable();
            $table->string('job_title', 100)->nullable();
            $table->tinyInteger('car')->nullable();
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
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
        Schema::dropIfExists('user_profile_infos');
    }
}
