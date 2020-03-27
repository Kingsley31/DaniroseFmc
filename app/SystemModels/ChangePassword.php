<?php

namespace App\SystemModels;

use Illuminate\Database\Eloquent\Model;

class ChangePassword extends Model
{
    protected $fillable=['email','code',];
}
