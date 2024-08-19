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
        Schema::create('user_application_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_application_id')->constrained();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('relation');
            $table->string('length');
            $table->string('letter');
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
        Schema::dropIfExists('user_application_references');
    }
};
