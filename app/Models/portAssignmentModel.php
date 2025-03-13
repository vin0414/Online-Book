<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class portAssignmentModel extends Model
{
    use HasFactory;
    protected $table = "tbl_port_assignment";
    protected $primaryKey = "assignID";
    protected $fillable = ['portID','userID','created_by'];
}
