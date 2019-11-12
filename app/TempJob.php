<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempJob extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'source', 'job_title', 'job_description', 'job_location', 'organization', 'publish_date', 'closing_date',
        'comments'
    ];
}
