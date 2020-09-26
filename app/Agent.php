<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'merchant_id', 'login_id_number', 'password',
    ];

    /**
        * The attributes that should be hidden for arrays.
        *
        * @var array
    */
    protected $hidden = [
        'password',
    ];

    public function merchant()
    {
        return $this->belongsTo('App\Merchant');
    }
}
