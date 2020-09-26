<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineOfferInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'offer_id', 'url', 'terms_conditions', 
    ];

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
