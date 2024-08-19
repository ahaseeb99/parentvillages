<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('scholarship_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->date('date');
            $table->string('address')->nullable();
            $table->string('appartment');
            $table->string('city');
            $table->string('state');
            $table->integer('postal_code');
            $table->string('phone');
            $table->string('award_letter');
            $table->string('transcript_letter');
            $table->string('high_school');
            $table->string('plan');
            $table->string('acceptance_letter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_applications');
    }
};
