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
        Schema::create('pack_orders', function (Blueprint $table) {
            $table->id();
            $table->string('proformalInvoice');
            $table->string('company');
            $table->string('pack');
            $table->string('price');
            $table->string('quantity');
            $table->string('totalCost');
            $table->string('payAmount');
            $table->string('note');


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
        Schema::dropIfExists('pack_orders');
    }
};
