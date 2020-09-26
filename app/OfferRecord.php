<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferRecord extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'user_id', 'offer_id', 'exclusive_points_used', 'points_used', 'total_paid_egp', 'cashback_points', 'exclusive_cashback_points',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function offer()
    {
        return $this->belongsTo('App\Offer');
    }

    public function commissionRecord()
    {
        return $this->morphOne('App\CommissionRecord', 'sourcable');
    }
}
