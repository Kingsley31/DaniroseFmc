<?php

namespace App\SystemModels;

use Illuminate\Database\Eloquent\Model;

class DoctorSummaryLink extends Model
{
    protected $fillable=[
        'appointment_id',
        'session_id',
        'expired',
    ];
}
