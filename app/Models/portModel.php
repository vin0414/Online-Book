<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class portModel extends Model
{
    use HasFactory;
    protected $table = "tblport";
    protected $primaryKey = "portID";
    protected $fillable = ['portName','corridorID','userID'];
}
