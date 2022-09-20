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
        Schema::create('bank_benificiaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('addressline1');
            $table->string('addressline2');
            $table->string('account_no');
            $table->string('swift_code');
            $table->string('status')->default();
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
        Schema::dropIfExists('bank_benificiaries');
    }
};
