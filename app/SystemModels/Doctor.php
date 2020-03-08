<?php

namespace App\SystemModels;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'user_id',
        'specilization',
    ];
}
