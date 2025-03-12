<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class vehicleModel extends Model
{
    use HasFactory;
    protected $table = "tblvehicles";
    protected $primaryKey = "vID";
    protected $fillable = ['vehicleName','vehicleClass','FOC','userID'];
}
