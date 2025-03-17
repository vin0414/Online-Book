<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class corridorModel extends Model
{
    use HasFactory;
    protected $table = "tblcorridor";
    protected $primaryKey = "corridorID";
    protected $fillable = ['corridorName','userID'];
}
