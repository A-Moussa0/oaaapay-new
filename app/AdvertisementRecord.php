<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisementRecord extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'user_id', 'advertisement_id', 'reward',
    ]

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function advertisement()
    {
        return $this->belongsTo('App\Advertisement');
    }
}
