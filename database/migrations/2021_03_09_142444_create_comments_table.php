<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on
            ('users')->onDelete('cascade');

            $table->boolean('isAdmin')->default(false);
            $table->boolean('completed')->default(false);
            $table->string('content');
            $table->text('paragraph');
            $table->string('text')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
