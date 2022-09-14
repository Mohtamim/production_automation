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
            $table->foreignId('managerId')->constrained('managerlists');
            $table->string('email');
            $table->string('warehouseName')->constrained('warehouses');;
            $table->decimal('amount',10,2);
            $table->timestamp('date');
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
