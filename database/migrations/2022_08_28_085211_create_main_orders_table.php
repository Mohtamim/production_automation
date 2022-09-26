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
        Schema::create('main_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('productId')->constrained('pruducts');
            $table->string('DH_PID');
            $table->foreignId('buyerId')->constrained('buyers');
            $table->string('buyerProductCode');
            $table->integer('buyerscode_id');
            $table->decimal('quantity', 10, 2);
            $table->decimal('unitPrice', 10, 2);
            $table->decimal('totalPrice', 10, 2);
            $table->date('processing')->format('d/m/Y')->nullable();
            $table->date('completed')->format('d/m/Y')->nullable();
            $table->date('delivered')->format('d/m/Y')->nullable();
            $table->date('received')->format('d/m/Y')->nullable();
            $table->date('approved')->format('d/m/Y')->nullable();
            $table->date('delivery_date')->format('d/m/Y')->nullable();
            $table->decimal('partial_delivery_quantity', 10, 2)->nullable();
            $table->decimal('grandTotal', 10, 2)->nullable();
            $table->decimal('totalQuantity', 10, 2)->nullable();
            $table->decimal('partial_delivery_amount', 10, 2)->format('d/m/Y')->nullable();
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
        Schema::dropIfExists('main_orders');
    }
};
