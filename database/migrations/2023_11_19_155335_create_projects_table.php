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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('owner_id'); // assuming a user owns a project
            $table->unsignedBigInteger('team_id'); // assuming a user owns a project
            $table->string('project_code', 10)->unique(); // uniqye ID per project
            $table->foreign('owner_id')->references('id')->on('users'); // foreign key constraint
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
