<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up()
    {
        Schema::create('migrated_patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->unique();
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('mobile_1');
            $table->string('mobile_2')->nullable();
            $table->string('email')->unique();
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
            $table->boolean('approved')->default(false); // Indicates if data is approved
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('migrated_patients');
    }
};

