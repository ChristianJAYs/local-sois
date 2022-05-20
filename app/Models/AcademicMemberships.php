<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicMemberships extends Model
{
    use HasFactory;

    protected $table = 'academic_membership';

    protected $primaryKey = 'academic_membership_id';

    protected $fillable = [
        'organization_id',
        'membership_fee',
        'semester',
        'school_year',
        'membership_start_date',
        'membership_end_date',
        'registration_status',
        'registration_start_date',
        'registration_end_date',
        'am_status',
        'created_at',
        'updated_at',
    ];


}