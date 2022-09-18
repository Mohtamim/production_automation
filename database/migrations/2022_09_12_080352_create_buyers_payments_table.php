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
        Schema::create('buyers_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyerId')->constrained('buyers');
            $table->string('buyerName');
            $table->integer('buyerCode');
            $table->string('note')->nullable();
            $table->string('email');
            $table->string('country');
            $table->decimal('amount',10,2);
            $table->timestamp('paydate')->nullable();
            $table->decimal('balance',10,2)->nullable();
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
        Schema::dropIfExists('buyers_payments');
    }
};
