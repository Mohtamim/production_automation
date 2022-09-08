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
        Schema::create('pruducts', function (Blueprint $table) {
            $table->id();
           $table->string('title') ;
           $table->string('category') ;
           $table->string('img');
           $table->string('unit') ;
           $table->string('DH_raw_materials') ;
           $table->string('warehouse_raw_materials') ;
           $table->integer('wages') ;
           $table->integer('carring_charge') ;
           $table->integer('treatement_deduction') ;
           $table->boolean('is_sample_product') ;
           $table->string('Details') ;
           $table->string('notes') ;
           $table->integer('totalcost_for_warehouse') ;
           $table->integer('DH_total_price') ;
           $table->integer('FOB_cost');
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
        Schema::dropIfExists('pruducts');
    }
};
