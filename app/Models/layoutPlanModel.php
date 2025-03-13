<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class layoutPlanModel extends Model
{
    use HasFactory;
    protected $table = "tbl_layout_plan";
    protected $primaryKey = "planID";
    protected $fillable = ['vesselID','layoutID','userID'];
}
