<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertisementDuration extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'seconds',
    ];

    public function webPackages()
    {
        return $this->hasMany('App\WebPackage');
    }

    public function videoViewPackages()
    {
        return $this->hasMany('App\VideoViewPackages');
    }

    public function videoHourPackages()
    {
        return $this->hasMany('App\VideoHourPackage');
    }
}
