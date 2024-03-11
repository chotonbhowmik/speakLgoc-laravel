<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalysesTable extends Migration
{
    public function up()
    {
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->text('content');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('analyses');
    }
}
