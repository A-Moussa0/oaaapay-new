<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIpLog extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'ip',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
