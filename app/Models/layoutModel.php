<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class layoutModel extends Model
{
    use HasFactory;
    protected $table = "tbl_layout";
    protected $primaryKey = "layoutID";
    protected $fillable = ['layoutName','userID'];
}
