<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'job_title', 'publish_date', 'closing_date', 'organisation', 'attachment'
    ];

    public function user()
	{
    	return $this->belongsTo('App\User');
	}
}
