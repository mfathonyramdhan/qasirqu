<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionSellsTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_sells', function (Blueprint $table) {
            $table->string('trsl_id')->primary();
            $table->string('trsl_buyerName');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_sells');
    }
}
