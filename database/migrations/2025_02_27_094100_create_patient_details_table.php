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
        Schema::create('patient_details', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('mobile_1');
            $table->string('mobile_2');
            $table->string('email');
            $table->string('blood');
            $table->string('gender');
            $table->string('marital');
            $table->string('address_1');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_mobile');
            $table->string('emergency_contact_address');
            $table->string('emergency_contact_relationship');
            $table->string('emergency_contact_city');
            $table->string('emergency_contact_state');
            $table->string('emergency_contact_zip');
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
        Schema::dropIfExists('patient_details');
    }
};
