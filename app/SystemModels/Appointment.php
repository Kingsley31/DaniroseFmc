<?php

namespace App\SystemModels;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
        'user_id',
        'doctor_id',
        'facility_type',
        'complaint',
        'date',
        'doctors_summary',
        'amount',
        'status',
    ];
}
