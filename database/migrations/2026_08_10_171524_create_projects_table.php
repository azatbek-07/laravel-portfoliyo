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

            $table->string('title');
            $table->text('description');

            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('gradient')->nullable();

            $table->string('status')->default('Ishlab chiqilmoqda');
            $table->string('status_color')->default('amber');

            $table->json('techs')->nullable();

            $table->string('github')->nullable();
            $table->string('demo')->nullable();

            $table->boolean('demo_active')->default(false);

            $table->timestamps();
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
