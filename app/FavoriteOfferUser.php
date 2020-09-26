<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FavoriteOfferUser extends Pivot
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'offer_id',
    ];

    /**
        * Indicates if the IDs are auto-incrementing.
        *
        * @var bool
    */
    public $incrementing = true;
}
