<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('identify_errors', function (Blueprint $table) {
            $table->id();
            $table->string('actual_error');
            $table->string('from_comm_app');
            $table->string('entity_error_point_to');
            $table->text('error_description');
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identify_errors');
    }
};
