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
        Schema::create('scholarship_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scholarship_id')->constrained();
            $table->string('name');
            $table->enum('type', ['service', 'event']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_questions');
    }
};
