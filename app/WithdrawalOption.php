<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawalOption extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'name', 'minimum_point', 'enabled', 'delivery_days', 'automated',
    ];

    public function userWithdrawalInfos()
    {
        return $this->hasMany('App\UserWithdrawalInfo');
    }

    public function requests()
    {
        return $this->hasMany('App\WithdrawalRequest');
    }

    public function countries()
    {
        return $this->belongsToMany('App\Country', 'country_withdrawal_option');
    }
}
