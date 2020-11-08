<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'merchant_id', 'name', 'expire_date', 'favorite_count', 'is_online', 'is_delivery', 'is_store', 'disabled', 'type', 'cost', 'multiple_use', 'cashback_percentage', 'bonus_cashback_percentage',
    ];

    public function records()
    {
        return $this->hasMany('App\OfferRecord');
    }

    public function merchant()
    {
        return $this->belongsTo('App\Merchant');
    }

    public function favoriteUsers()
    {
        return $this->belongsToMany('App\User')->using('App\FavoriteOfferUser');
    }

    public function type()
    {
        return $this->belongsTo('App\OfferType');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function survey()
    {
        return $this->hasOne('App\FeedbackSurvey');
    }

    public function medias()
    {
        return $this->hasMany('App\OfferMedia');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->using('App\OfferTag');
    }

    public function onlineInfo()
    {
        return $this->hasOne('App\OnlineOfferInfo');
    }
}
