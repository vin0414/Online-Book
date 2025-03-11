<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rateModel extends Model
{
    use HasFactory;
    protected $table = "tblrates";
    protected $primaryKey = "ratesID";
    protected $fillable = ['portID','accommodationID','vID','passenger_type','rate','discount','newRate'];
}
