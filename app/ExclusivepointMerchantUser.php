<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ExclusivepointMerchantUser extends Pivot
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'merchant_id', 'exclusive_points',
    ];

    /**
        * Indicates if the IDs are auto-incrementing.
        *
        * @var bool
    */
    public $incrementing = true;
}
