<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppenCompleteRecord extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id',  'initialized_id', 'generated_at', 'ip', 'action', 'reward', 'payout_usd', 'Job_title',
    ];

    /**
        * The attributes that should be cast to native types.
        *
        * @var array
    */
    protected $casts = [
        'generated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function appenInitialize()
    {
        return $this->belongsTo('App\AppenInitialize');
    }
}
