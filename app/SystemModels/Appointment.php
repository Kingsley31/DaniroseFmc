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
        'specialization',
        'date',
        'time',
        'doctors_summary',
        'amount',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
