<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sartner extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'photo', 'url'];
}
