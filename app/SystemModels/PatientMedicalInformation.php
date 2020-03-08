<?php

namespace App\SystemModels;

use Illuminate\Database\Eloquent\Model;

class PatientMedicalInformation extends Model
{
    protected $fillable=[
        'user_id','weight','height',
        'bmi','allergies','medications',
        'long_term_conditions','vaccinations',
        'diertary_restrictions','drink_alcohol',
        'use_drugs','smokes',
    ];
}
