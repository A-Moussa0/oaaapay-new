<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackSurvey extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'offer_id', 'host_survey_id', 'survey_name', 'response_count',
    ];

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
