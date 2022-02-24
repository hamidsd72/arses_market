<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('uid')->nullable();
            $table->bigInteger('mobile');
            $table->bigInteger('phone')->nullable();
            $table->integer('nationalCode')->nullable();
            $table->bigInteger('postCode')->nullable();
            $table->text('address')->nullable();
            $table->boolean('visible')->default(false);
            $table->string('avatar')->nullable();
            $table->string('cardImage')->nullable();
            $table->string('selfe')->nullable();
            $table->boolean('isAdmin')->default(false);
            $table->string('name',200);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
