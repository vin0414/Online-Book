<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class logModel extends Model
{
    use HasFactory;
    protected $table = "tblsystemlog";
    protected $primaryKey = "logID";
    protected $fillable = ['Date','userID','Activity','page'];
}
