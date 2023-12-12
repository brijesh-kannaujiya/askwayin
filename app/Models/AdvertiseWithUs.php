<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertiseWithUs extends Model
{
    protected $fillable = [
        'name',
        'email','message','subject','phone_number'
    ];
    
   // public $timestamps = false;
}
