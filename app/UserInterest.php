<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    protected $table = "user_interest_area";

    protected $fillable = [
        'user_id', 'interest_area', 'interest_selected'
    ];

    public function user()
	{
    	return $this->belongsTo('App\User');
	}
}
