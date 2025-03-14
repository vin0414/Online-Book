<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rebookModel extends Model
{
    use HasFactory;
    protected $table = "tblrebook_policy";
    protected $primaryKey = "rebookID";
    protected $fillable = ['numberofHours','percentage','userID'];
}
