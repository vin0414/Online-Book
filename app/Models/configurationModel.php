<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class configurationModel extends Model
{
    use HasFactory;
    protected $table = "tblconfiguration";
    protected $primaryKey = "configID";
    protected $fillable = ['portID','fromDate','ToDate','withDiscount','isManual','userID'];
}
