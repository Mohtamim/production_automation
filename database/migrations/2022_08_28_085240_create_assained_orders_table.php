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
            $table->date('processing')->format('d/m/Y')->nullable();
            $table->date('completed')->format('d/m/Y')->nullable();
            $table->date('delivered')->format('d/m/Y')->nullable();
            $table->date('received')->format('d/m/Y')->nullable();
            $table->date('approved')->format('d/m/Y')->nullable();
            $table->date('delivery_date')->format('d/m/Y')->nullable();
            $table->date('partial_delivery_quantity')->format('d/m/Y')->nullable();
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
