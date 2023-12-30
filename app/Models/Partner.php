<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name',
        'brand_name_arbic',
        'brand_url',
        'brand_img',
        'photo'
    ];
}
