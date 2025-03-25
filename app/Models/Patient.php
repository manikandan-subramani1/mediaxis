<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\PatientController;
use DB;


use Illuminate\Database\Eloquent\Factories\HasFactory;



class Patient extends Model
{
    
        use HasFactory;
    
        protected $fillable = [
            'patient_id', 'image', 'first_name', 'last_name', 'dob', 'mobile_1', 'mobile_2', 
            'email', 'blood', 'gender', 'marital', 'address_1', 'city', 'state', 'zip',
            'emergency_contact_name', 'emergency_contact_mobile', 'emergency_contact_address',
            'emergency_contact_relationship', 'emergency_contact_city', 'emergency_contact_state',
            'emergency_contact_zip', 'previous_hash', 'hash', 'nonce'
        ];

        protected $table = 'patient_details'; // Change to the actual table name

    
    private static $difficulty = 3;
        
        public static function generateHash($data, $nonce)
        {
            return hash('sha256', json_encode($data) . $nonce);
        }

         // Proof of Work: Find a valid nonce
        public static function mineBlock($data)
        {
            $nonce = 0;
            $hash = self::generateHash($data, $nonce);
    
            while (substr($hash, 0, self::$difficulty) !== str_repeat('0', self::$difficulty)) {
                $nonce++;
                $hash = self::generateHash($data, $nonce);
            }
    
            return ['hash' => $hash, 'nonce' => $nonce];
        }

    // Store Data in a Specific Node
    public static function storeInNode($data)
    {
        return DB::table('patient_details')->insert($data);
    }

  



}
