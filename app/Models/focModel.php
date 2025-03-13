<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class focModel extends Model
{
    use HasFactory;
    protected $table = "tblfree";
    protected $primaryKey = "freeID";
    protected $fillable = ['vID','portID','FOC','userID'];
}
