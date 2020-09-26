<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisementType extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'name',
    ];

    public function advertisements()
    {
        return $this->hasMany('App\Advertisement');
    }
}
