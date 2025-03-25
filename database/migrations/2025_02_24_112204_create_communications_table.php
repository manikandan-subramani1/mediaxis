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
        for ($i = 1; $i <= 2; $i++) 
        {
        Schema::create("communications{$i}", function (Blueprint $table) {
            $table->id();
            $table->string('job_id')->unique();
            $table->string('message');
            $table->string('sender_id');
            $table->string('type');
            $table->string('urls');
            $table->string('previous_hash');
            $table->string('hash');
            $table->bigInteger('nonce');
           
            $table->timestamps();
        });
       }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communications');
    }
};
