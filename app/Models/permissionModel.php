<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class permissionModel extends Model
{
    use HasFactory;
    protected $table = "tblpermission";
    protected $primaryKey = "permissionID";
    protected $fillable = ['userID','userCreation','userModification',
                            'tripCreation','tripModification',
                            'partnerRegistration','partnerModification',
                            'promoCreation','promoModification',
                            'discountCreation','discountModification',
                            'crm','advanceBooking','port','vessel'];
}
