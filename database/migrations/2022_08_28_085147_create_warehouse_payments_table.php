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
        Schema::create('warehouse_payments', function (Blueprint $table) {
            $table->id();
            $table->string('managerName');
            $table->foreignId('managerId');
            $table->string('email');
            $table->string('warehouseName')->constrained('warehouses');
            $table->string('note')->default('Payment Added');
            $table->decimal('amount',10,2);
            $table->decimal('balance',10,2)->default('0');
            $table->date('date')->format('d/m/Y')->nullable();
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
        Schema::dropIfExists('warehouse_payments');
    }
};
