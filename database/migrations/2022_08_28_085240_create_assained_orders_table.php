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
        Schema::create('assained_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mainOrderId')->constrained('main_orders')->onDelete('cascade');
            $table->foreignId('productId')->constrained('pruducts');
            $table->integer('warehouseId');
            $table->decimal('quantity');
            $table->timestamp('processing')->nullable();
            $table->timestamp('delivered')->nullable();
            $table->timestamp('received')->nullable();
            $table->timestamp('approved')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->timestamp('partial_delivery_quantity')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('assained_orders');
    }
};
