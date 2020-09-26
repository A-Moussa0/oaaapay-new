<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirdpartyTask extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'thirdparty_id', 'name', 'description', 'reward', 'country', 'payout_usd', 'url', 'media_url',
    ];

    public function thirdparty()
    {
        return $this->belongsTo('App\Thirdparty');
    }

    public function records()
    {
        return $this->hasMany('App\ThirdpartyTaskRecord);
    }
}
