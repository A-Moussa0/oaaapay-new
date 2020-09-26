<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CountryWithdrawalOption extends Pivot
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'withdrawal_option_id', 'country_id',
    ];

    /**
        * Indicates if the IDs are auto-incrementing.
        *
        * @var bool
    */
    public $incrementing = true;
}
