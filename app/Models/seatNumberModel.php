<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class seatNumberModel extends Model
{
    use HasFactory;
    protected $table = "tblseat";
    protected $primaryKey = "seatID";
    protected $fillable = ['vesselID','seatNumber','accommodationID'];
}
