<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'is_mobile'
    ];
}
