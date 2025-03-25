<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MigratedPatient extends Model
{
    use HasFactory;

    protected $table = 'migrated_patients'; 
    protected $fillable = [
        'patient_id', 'image', 'first_name', 'last_name', 'dob', 'mobile_1', 'mobile_2', 
        'email', 'blood', 'gender', 'marital', 'address_1', 'city', 'state', 'zip',
        'emergency_contact_name', 'emergency_contact_mobile', 'emergency_contact_address',
        'emergency_contact_relationship', 'emergency_contact_city', 'emergency_contact_state',
        'emergency_contact_zip', 'previous_hash', 'hash', 'nonce', 
    ];
}
