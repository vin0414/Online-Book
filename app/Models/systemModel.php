<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class systemModel extends Model
{
    use HasFactory;
    protected $table = "tblsystem";
    protected $primaryKey = "systemID";
    protected $fillable = ['minimumDays','maximumDays','cancellationTime','userID'];
}
