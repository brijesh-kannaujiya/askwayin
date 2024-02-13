<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    public function user()
    {
        return $this->belongsTo('App\Models\User')->withDefault();
    }
}
