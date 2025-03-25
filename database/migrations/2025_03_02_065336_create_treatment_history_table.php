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
        for ($i = 1; $i <= 2; $i++) {
        Schema::create("treatment_history($i)", function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('name');
            $table->string('mobile');
            $table->date('date');
            $table->time('time');
            $table->string('treatment');
            $table->string('msg');
            $table->string('doctor');
            $table->string('amount');   
            $table->string('previous_hash');
            $table->string('hash');
            $table->string('nonce');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_history');
    }
};
