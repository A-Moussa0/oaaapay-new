<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->string('title', 100);
            $table->string('description', 255);
            $table->integer('click_count')->unsigned()->default(0);
            $table->integer('completed_count')->unsigned()->default(0);
            $table->timestamp('approved_at')->nullable();
            $table->tinyInteger('paused')->default(1);
            $table->integer('remaining_views')->nullable();
            $table->json('gender')->nullable();
            $table->tinyInteger('minimum_age')->nullable();
            $table->tinyInteger('maximum_age')->nullable();
            $table->string('url', 1999);
            $table->string('media_url', 1999);
            $table->json('country_filter')->nullable();
            $table->tinyInteger('premium')->default(0);
            $table->smallInteger('reward')->unsigned();
            $table->smallInteger('packagable_id');
            $table->string('packagable_type', 100);
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
        Schema::dropIfExists('advertisements');
    }
}
