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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('buyer');
            $table->string('brand');
            $table->string('season');
            $table->string('style_number');
            $table->string('description');
            $table->string('internal_number');
            $table->string('quantity');
            $table->string('size1');
            $table->string('size2');
            $table->string('size3');
            $table->string('size4');
            $table->string('assigned');         
            $table->string('ass_date');
            $table->string('deli_date');
            $table->string('message');
            $table->string('previous_hash');
            $table->string('hash');
            $table->string('nonce');
            $table->string('printing');
            $table->string('embroiding');
            $table->string('stiching');
            $table->string('ironing');
            $table->string('packaging');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
