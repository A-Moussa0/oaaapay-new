<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppenInitialize extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'generated_at', 'transaction_id', 'action',
    ];

    /**
        * The attributes that should be cast to native types.
        *
        * @var array
    */
    protected $casts = [
        'generated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
