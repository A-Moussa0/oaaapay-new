<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name',
    ];

    public function offers()
    {
        return $this->belongsToMany('App\Offer')->using('App\OfferTag');
    }
}
