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
            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id')->references('id')->on('users');
            $table->unsignedBigInteger('membership_id')->default(1);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('mobile', 45)->unique()->nullable();
            $table->integer('points_balance')->nullable()->default(0);
            $table->integer('pending_points_balance')->nullable()->default(0);
            $table->integer('total_commissions')->nullable()->default(0);
            $table->integer('pending_commissions')->nullable()->default(0);
            $table->integer('withdrawn_points')->nullable()->default(0);
            $table->timestamp('last_active')->nullable();
            $table->tinyInteger('suspended')->default(0);
            $table->smallInteger('total_ads_watched')->nullable()->default(0);
            $table->tinyInteger('pioneer')->nullable()->default(0);
            $table->tinyInteger('bypass_ip_check')->nullable()->default(0);
            $table->tinyInteger('no_referrals')->nullable()->default(0);
            $table->integer('redeemed_points')->nullable()->default(0);
            $table->smallInteger('offers_bought')->nullable()->default(0);
            $table->smallInteger('tasks_completed')->nullable()->default(0);
            $table->smallInteger('surveys_completed')->nullable()->default(0);
            $table->string('signup_ip', 130);
            $table->string('username', 255)->nullable();
            $table->tinyInteger('automatic_withdrawal')->nullable()->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('source', 100)->nullable()->default('Organic');
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
