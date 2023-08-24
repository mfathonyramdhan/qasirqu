<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('products_details', function (Blueprint $table) {
            $table->string('prdt_id')->primary();
            $table->string('id_prd');
            $table->string('id_item');
            $table->decimal('prdt_item_needed');
            $table->timestamps();

            $table->foreign('id_prd')->references('prd_id')->on('products');
            $table->foreign('id_item')->references('item_id')->on('items');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products_details');
    }
}
