<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OfferTag extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'offer_id', 'tag_id',
    ];

    /**
        * Indicates if the IDs are auto-incrementing.
        *
        * @var bool
    */
    public $incrementing = true;
}
