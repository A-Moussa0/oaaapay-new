<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name', 'description',
    ];
    
    public function Offers()
    {
        return $this->hasMany('App\Offer');
    }
}
