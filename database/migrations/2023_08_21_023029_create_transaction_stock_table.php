<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionStockTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_stock', function (Blueprint $table) {
            $table->string('trst_id')->primary();
            $table->decimal('trst_stock');
            $table->string('id_item');
            $table->string('id_inv')->nullable();
            $table->string('id_str')->nullable();
            $table->timestamps();

            $table->foreign('id_item')->references('item_id')->on('items');
            $table->foreign('id_inv')->references('inv_id')->on('inventory');
            $table->foreign('id_str')->references('str_id')->on('store');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_stock');
    }
}
