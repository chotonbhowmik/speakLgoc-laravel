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
        Schema::create('analysis_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('enable_analysis')->default(false);
            $table->boolean('enable_comment')->default(false);
            $table->boolean('enable_analysis_comment')->default(false);
            $table->boolean('enable_subject')->default(false);
            $table->boolean('enable_analysis_before_posting')->default(false);
            $table->boolean('enable_comment_before_posting')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analysis_settings');
    }
};
