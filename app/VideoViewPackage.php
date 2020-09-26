<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoViewPackage extends Model
{
        /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'duration_id', 'views', 'cost_points',
    ];


    public function advertisements()
    {
        return $this->MorphMany('App\Advertisement', 'packagable');
    }

    public function duration()
    {
        return $this->belongsTo('App\AdvertisementDuration');
    }
}
