<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_title', 'job_description', 'publish_date', 'closing_date', 'company_image', 
        'organisation_type', 'organisation', 'country', 'state', 'city', 'attachment', 'posted_by'
    ];
    
    public function sectors()
    {
        return $this->hasMany(JobSector::class, 'job_id');
    }
}
