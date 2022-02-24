<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();

//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on
//            ('users')->onDelete('cascade');
 
            $table->bigInteger('rials')->default(0);
            $table->bigInteger('dollar')->default(0);
            $table->string('bankName')->nullable();
            $table->string('substation')->nullable();
            $table->bigInteger('cardId')->nullable();
            $table->string('nationalCardId')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('visible')->default(false);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
