<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Works extends Model
{
     protected $work ='order';

       

       
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

         // Get Last Transaction for a Node
    public static function getLastTransaction($nodeTable)
    {
        return DB::table($nodeTable)->latest()->first();
    }

    // Store Data in a Specific Node
    public static function storeInNode($data)
    {
        return DB::table('order')->insert($data);
    }

    // Get All Transactions from All Nodes
    public static function getAllNodeTransactions()
    {
        $allTransactions = [];
        for ($i = 1; $i <= 2; $i++) {
            $table = "order{$i}";
            $allTransactions[$table] = DB::table($table)->get();
        }
        return $allTransactions;
    }



    
}
