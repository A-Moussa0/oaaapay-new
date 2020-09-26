<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisementCategory extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'name',
    ];

    public function advertisments()
    {
        return $this->hasMany('App\Advertisement');
    }
}
