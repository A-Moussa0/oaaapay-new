<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'withdrawal_option_id', 'user_withdrawal_info', 'delivery_date', 'amount_points', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function withdrawalOption()
    {
        return $this->hasOne('App\WithdrawalOption');
    }
    
    public function withdrawalInfo()
    {
        return $this->hasOne('App\UserWithdrawalInfo');
    }
}
