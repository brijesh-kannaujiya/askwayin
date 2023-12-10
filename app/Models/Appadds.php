<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appadds extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'appadds_url',
        'appadds_img',
        'photo'
    ];
}
