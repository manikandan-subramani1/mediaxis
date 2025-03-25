<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Transaction extends Model
{
    protected $fillable = ['job_id', 'message', 'sender_id', 'type', 'previous_hash', 'hash', 'nonce'];

    private static $difficulty = 4; 

    public static function generateHash($data, $nonce)
    {
        return hash('sha256', json_encode($data) . $nonce);
    }

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



    public static function getLastTransaction($nodeTable)
    {
        return DB::table($nodeTable)->latest()->first();
    }

    // Store Data in a Specific Node
    public static function storeInNode($nodeTable, $data)
    {
        return DB::table($nodeTable)->insert($data);
    }

    // Get All Transactions from All Nodes
    public static function getAllNodeTransactions()
    {
        $allTransactions = [];
        for ($i = 1; $i <= 2; $i++) {
            $table = "communications{$i}";
            $allTransactions[$table] = DB::table($table)->get();
        }
        return $allTransactions;
    }

}
