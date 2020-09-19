<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpToCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_to_country', function (Blueprint $table) {
            $table->id();
            $table->decimal('begin_ip_num', 39, 0);
            $table->decimal('end_ip_num', 39, 0);
            $table->string('country_code', 3);
            $table->string('country_name', 45);
            $table->timestamps();
        });

         DB::statement('ALTER TABLE ip_to_country MODIFY begin_ip_num decimal(39,0) UNSIGNED ZEROFILL NOT NULL');
         DB::statement('ALTER TABLE ip_to_country MODIFY end_ip_num decimal(39,0) UNSIGNED ZEROFILL NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ip_to_country');
    }
}
