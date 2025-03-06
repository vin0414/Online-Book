<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class seatModel extends Model
{
    use HasFactory;
    protected $table = "tblaccommodation";
    protected $primaryKey = "accommodationID";
    protected $fillable = ['vesselID','Seat_type','Status'];
}
