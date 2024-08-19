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
        Schema::create('employees_evaluations', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id')->unsigned();
            $table->unsignedBigInteger('evaluation_id')->unsigned();

            $table->foreign('employee_id')->references('id')->on('employees')
                ->onDelete('cascade');

            $table->foreign('evaluation_id')->references('id')->on('evaluations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_evaluations');
    }
};