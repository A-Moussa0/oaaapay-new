<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommissionRecord extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'referrer_id', 'sourcable_id', 'sourcable_type', 'amount_points', 'uuid', 'status', 'credit_date', 'declined_at', 'percentage'
    ];

    /**
        * The attributes that should be cast to native types.
        *
        * @var array
    */
    protected $casts = [
        'credit_date' => 'datetime',
        'declined_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function sourcable()
    {
        return $this->morphTo();
    }
}
