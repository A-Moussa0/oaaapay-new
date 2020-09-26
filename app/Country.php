<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'name', 'iso',
    ];

    public function userProfiles()
    {
        return $this->hasMany('App\UserProfileInfo');
    }

    public function users()
    {
        return $this->hasManyThrough('App\User', 'App\UserProfileInfo');
    }

    public function withdrawalOptions()
    {
        return $this->belongsToMany('App\WithdrawalOption', 'country_withdrawal_option');
    }
}
