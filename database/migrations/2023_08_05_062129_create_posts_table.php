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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article_title')->nullable();
             $table->string('aricale_description')->nullable();
            $table->string('provider_name')->nullable();
            $table->string('person_name')->nullable();
            $table->string('person_location')->nullable();
            $table->boolean('use_given_set')->default(false);
            $table->string('people_location')->nullable();
            $table->string('consideration')->nullable();
            $table->string('event_name')->nullable();
            $table->string('event_location')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->text('information_before_event')->nullable();
            $table->text('mother_nature')->nullable();
            $table->text('function_executed')->nullable();
            $table->text('problem_developed')->nullable();
            $table->text('Relationship_if_any_between')->nullable();
            $table->text('Function_executed_from_event')->nullable();
            $table->text('Pre_event_observation')->nullable();
            $table->text('Post_event_observation')->nullable();
            $table->string('about_given_set')->nullable();
            $table->string('product_name')->nullable();
            $table->string('model_number')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_function')->nullable();
            $table->string('problem_solved')->nullable();
            $table->string('function_executed_review')->nullable();
            $table->string('is_problem_solved')->nullable();
            $table->text('additional_information')->nullable();
            $table->string('product_url')->nullable();
            $table->string('provider_contact')->nullable();
            $table->string('reviewer_contact')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
