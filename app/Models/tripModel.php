<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tripModel extends Model
{
    use HasFactory;
    protected $table = "tbltrip";
    protected $primaryKey = "tripID";
    protected $fillable = ['portID','fromDate','toDate','timeDeparture','duration','isActive','isOnline','Code'];
}
