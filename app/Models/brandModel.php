<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class brandModel extends Model
{
    use HasFactory;
    protected $table = "tblbrand";
    protected $primaryKey = "brandID";
    protected $fillable = ['vID','brand','model','length','userID'];
}
