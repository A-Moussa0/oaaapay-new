<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferMedia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'offer_id', 'type', 'url',
    ];

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }
}
