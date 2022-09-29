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
        Schema::create('supplier_assaign_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignOrderId')->constrained('assained_orders');
            $table->foreignId('productId')->constrained('pruducts');
            $table->integer('warehouseId');
            $table->decimal('quantity');
            $table->date('processing')->format('d/m/Y')->nullable();
            $table->date('completed')->format('d/m/Y')->nullable();
            $table->date('delivered')->format('d/m/Y')->nullable();
            $table->date('received')->format('d/m/Y')->nullable();
            $table->date('approved')->format('d/m/Y')->nullable();
            $table->date('delivery_date')->format('d/m/Y')->nullable();
            $table->decimal('partial_delivery_quantity')->nullable();
            $table->decimal('partial_delivery_amount', 10, 2)->nullable();
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
        Schema::dropIfExists('supplier_assaign_orders');
    }
};
