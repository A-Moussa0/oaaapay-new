<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'category_id', 'type_id', 'packagable_id', 'packagable_type', 'title', 'description', 'click_count', 'completed_count', 'gender', 'minimum_age', 'maximum_age', 'paused', 'approved_at', 'remaining_views', 'url', 'media_url', 'country_filter', 'premium', 'reward',
    ];

    /**
        * The attributes that should be cast to native types.
        *
        * @var array
    */
    protected $casts = [
        'approved_at' => 'datetime',
    ];

    public function records()
    {
        return $this->hasMany('App\AdvertisementRecord');
    }

    public function category()
    {
        return $this->belongsTo('App\ADvertisementCategory');
    }

    public function type()
    {
        return $this->belongsTo('App\AdvertisementType');
    }
    
    public function package()
    {
        return $this->MorphTo();
    }
}
