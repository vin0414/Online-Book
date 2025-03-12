<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class closingTripModel extends Model
{
    use HasFactory;
    protected $table = "tblclosetrip";
    protected $primaryKey = "closeID";
    protected $fillable = ['portID','tripID','fromDate','toDate','userID'];
}
