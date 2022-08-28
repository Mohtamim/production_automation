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
        Schema::create('managerlists', function (Blueprint $table) {
            $table->id();
            $table->integer('managerId');
            $table->string('managerName');
            $table->string('phone');
            $table->string('email');
            $table->integer('warehouseId')->nullable()->change();
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
        Schema::dropIfExists('managerlists');
    }
};
