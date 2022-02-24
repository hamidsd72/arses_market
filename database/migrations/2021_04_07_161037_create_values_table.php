<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValuesTable extends Migration
{
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->integer('buy')->nullable();
            $table->integer('sale')->nullable();
            $table->integer('benefit')->nullable();
            $table->string('trc20')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('values');
    }
}
