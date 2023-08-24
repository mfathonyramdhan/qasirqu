<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionSellsDetailTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_sells_detail', function (Blueprint $table) {
            $table->string('trsld_id')->primary();
            $table->string('id_trsl');
            $table->string('id_prd');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('id_trsl')->references('trsl_id')->on('transaction_sells');
            $table->foreign('id_prd')->references('prd_id')->on('products');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_sells_detail');
    }
}
