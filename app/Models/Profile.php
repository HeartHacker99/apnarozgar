<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'avatar', 'about'];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
