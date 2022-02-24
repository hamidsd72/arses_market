<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on
            ('users')->onDelete('cascade');
//            buy => true === Sale => false
            $table->boolean('transaction')->default(true);
//            buy or sale dollar
            $table->integer('dollarRate')->nullable();
            $table->integer('count')->nullable();
            $table->bigInteger('totalPrice')->nullable();
            $table->string('trc20')->nullable(); 
//            path of insert money
            $table->string('pushTo')->nullable();
            $table->boolean('completed')->default(false);
//            paid state
            $table->boolean('paid')->default(false);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
