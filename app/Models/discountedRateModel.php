<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class discountedRateModel extends Model
{
    use HasFactory;
    protected $table = "tbldiscounted_rate";
    protected $primaryKey = "discountRateID";
    protected $fillable = ['typeOfDiscount','portID','accommodationID','discount','Fare','newFare'];
}
