<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackSurveyRecord extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'user_id', 'feedback_survey_id', 'reward', 'answer_date', 'credit_date', 'credit_status', 'declined_at', 'opened_at', 'decline_reason', 'response_id',
    ];

    /**
        * The attributes that should be cast to native types.
        *
        * @var array
    */
    protected $casts = [
        'answer_date' => 'datetime',
        'credit_date' => 'datetime',
        'declined_at' => 'datetime',
        'opened_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function survey()
    {
        return $this->belongsTo('App\FeedbackSurvey');
    }

    public function commissionRecord()
    {
        return $this->morphOne('App\CommissionRecord', 'sourcable');
    }
}
