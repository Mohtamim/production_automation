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
<<<<<<< HEAD
            $table->foreignId('buyerId')->constrained('buyers');
=======
            $table->foreignId('buyerscode_id')->constrained('buyers');
>>>>>>> ee1e1d2fcefbf3e2ca3ebd2001edac607001862a
            $table->decimal('quantity', 10, 2);
            $table->decimal('unitPrice', 10, 2);
            $table->decimal('totalPrice', 10, 2);
            $table->timestamp('processing')->nullable();
            $table->timestamp('delivered')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->timestamp('partial_delivery_quantity')->nullable();
            $table->timestamp('partial_delivery_amount')->nullable();
            $table->decimal('remaing_quantity',11,2);
            $table->decimal('assaigned_quantity',11,2)->nullable();
            $table->boolean('status')->nullable();
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
