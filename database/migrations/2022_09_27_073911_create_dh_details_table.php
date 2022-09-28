<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dh_details', function (Blueprint $table) {
            $table->id();
            $table->string('dh_name');
            $table->string('registered_office');
            $table->string('present_address');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
            $table->string('website');
            $table->string('logo');
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
        Schema::dropIfExists('dh_details');
    }
};
