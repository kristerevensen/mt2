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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('team_code')->unique(); // unique teams code
            $table->string('name');
            $table->boolean('personal_team');
            $table->string('domain')->default(''); // applied later
            $table->string('language')->default(''); // applied later
            $table->string('language_code')->default(''); // applied later
            $table->string('location_code')->default(''); // applied later
            $table->string('location_name')->default(''); //applied later
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
