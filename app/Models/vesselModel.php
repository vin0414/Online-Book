<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class vesselModel extends Model
{
    use HasFactory;
    protected $table = "tblvessel";
    protected $primaryKey = "vesselID";
    protected $fillable = ['vesselName','vesselCode','portID','econo','premiumEcono','businessClass'];
}
