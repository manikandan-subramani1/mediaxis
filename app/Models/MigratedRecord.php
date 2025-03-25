<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MigratedRecord extends Model
{
    use HasFactory;
    protected $table = 'migrated_records';
    protected $fillable = ['patient_id', 'name', 'mobile', 'date', 'status'];
}
