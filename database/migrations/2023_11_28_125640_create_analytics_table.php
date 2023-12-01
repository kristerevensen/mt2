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
        Schema::create('analytics', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title')->nullable();
            $table->string('referrer')->nullable();
            $table->string('device_type');
            $table->timestamps();
            $table->string('project_code');
            $table->string('session_id')->nullable();
            $table->string('hostname')->nullable();
            $table->string('protocol')->nullable();
            $table->string('pathname')->nullable();
            $table->string('language')->nullable();
            $table->boolean('cookie_enabled')->nullable();
            $table->integer('screen_width')->nullable();
            $table->integer('screen_height')->nullable();
            $table->integer('history_length')->nullable();
            $table->integer('word_count')->nullable();
            $table->integer('form_count')->nullable();
            // Additional columns as needed
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics');
    }
};
