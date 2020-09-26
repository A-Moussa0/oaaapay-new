<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'name',
    ];

    public function merchants()
    {
        return $this->hasMany('App\Merchant');
    }
}
