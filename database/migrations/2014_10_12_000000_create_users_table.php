<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('mobile', 45)->unique()->nullable();
            $table->tinyInteger('membership_id')->default(1);
            $table->integer('points_balance')->default(0);
            $table->integer('pending_points_balance')->default(0);
            $table->integer('total_commissions')->default(0);
            $table->integer('pending_commissions')->default(0);
            $table->integer('withdrawn_points')->default(0);
            $table->dateTime('last_active')->nullable();
            $table->tinyInteger('suspended')->default(0);
            $table->smallInteger('total_ads_watched')->default(0);
            $table->tinyInteger('pioneer')->default(0);
            $table->tinyInteger('bypass_ip_check')->default(0);
            $table->tinyInteger('no_referrals')->default(0);
            $table->integer('redeemed_points')->default(0);
            $table->smallInteger('offers_bought')->default(0);
            $table->smallInteger('tasks_completed')->default(0);
            $table->smallInteger('surveys_completed')->default(0);
            $table->string('signup_ip', 130);
            $table->string('username', 255)->nullable();
            $table->dateTime('registration_date')->nullable();
            $table->tinyInteger('automatic_withdrawal')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('source', 100)->default('Organic');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
