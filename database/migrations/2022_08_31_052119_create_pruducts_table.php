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
           $table->string('supplier_raw_materials') ;
           $table->string('wages') ;
           $table->string('carring_charge') ;
           $table->string('treatement_deduction') ;
           $table->string('is_sample_product') ;
           $table->string('Details') ;
           $table->string('notes') ;
           $table->string('totalcost_for_supplier') ;
           $table->string('DH_total_price') ;
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
