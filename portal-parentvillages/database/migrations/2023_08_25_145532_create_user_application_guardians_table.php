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
        Schema::create('user_application_guardians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_application_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->boolean('high_school_diploma')->default(false);
            $table->boolean('associate_degree')->default(false);
            $table->boolean('bachelor_degree')->default(false);
            $table->boolean('master_degree')->default(false);
            $table->boolean('doctoral_degree')->default(false);
            $table->boolean('none')->default(false);
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
        Schema::dropIfExists('user_application_guardians');
    }
};
