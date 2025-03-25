<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MigrationController;
use DB;

class Migration extends Model
{
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
        return DB::table('migreq')->insert($data);
    }

  



}
