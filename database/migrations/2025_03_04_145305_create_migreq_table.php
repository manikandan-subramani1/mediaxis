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
        Schema::create('migreq', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('y_hospital');
            $table->string('y_reason');
            $table->string('m_hospital');
            $table->string('m_id');
            $table->string('previous_hash');
            $table->string('hash');
            $table->string('nonce');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migreq');
    }
};
