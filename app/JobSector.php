<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSector extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sector_id', 'job_id'
    ];
}
