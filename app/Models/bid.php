<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bid extends Model
{
    protected $fillable = [
        'user_id',
        'price',
        'days',
        'description',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase');
    }
}
