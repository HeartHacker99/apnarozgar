<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function reviews()
	{
		return $this->hasMany('App\Models\Review');
	}

	public function purchases()
	{
		return $this->hasMany('App\Models\Purchase');
	}
}
