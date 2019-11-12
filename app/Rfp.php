<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfp extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rfp_title', 'rfp_description', 'publish_date', 'closing_date', 'company_image', 'organisation', 'attachment', 'posted_by'
    ];
}
