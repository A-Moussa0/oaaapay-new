<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantStore extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'merchant_id', 'street_name', 'building_number', 'governoment', 'phone_number',
    ];

    public function merchant()
    {
        return $this->belongsTo('App\Merchant');
    }
}
