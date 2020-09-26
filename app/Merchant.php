<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'industry_id', 'account_manager_id', 'name', 'email', 'password', 'exclusivepoints_enabled', 'onboard_date', 'exclusivepoints_percentage',
    ];

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function agents()
    {
        return $this->hasMany('App\Agent');
    }

    public function accountManager()
    {
        return $this->belongsTo('App\AccountManager');
    }

    public function industry()
    {
        return $this->belongsTo('App\Industry');
    }

    public function stores()
    {
        return $this->hasMany('App\MerchantStore');
    }

    public function exclusivepointUsers()
    {
        return $this->belongsToMany('App\User')
        ->using('App\ExclusivepointMerchantUser')
        ->withPivot([
            'exclusive_points'
        ]);
    }
}
