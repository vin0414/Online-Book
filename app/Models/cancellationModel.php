<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cancellationModel extends Model
{
    use HasFactory;
    protected $table = "tblcancellation_policy";
    protected $primaryKey = "cancellationID";
    protected $fillable = ['Details','minimumDays','maximumDays','fee','userID'];
}
