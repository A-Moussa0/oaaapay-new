<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountManager extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'name', 'email', 'mobile_number',
    ];

    public function merchants()
    {
        return $this->hasMany('App\Merchant');
    }
}
