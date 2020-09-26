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
        'user_id', 'withdrawal_option_id', 'user_withdrawal_info', 'delivery_date', 'amount_points', 'status', 'decline_reason', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function withdrawalOption()
    {
        return $this->belongsTo('App\WithdrawalOption');
    }
    
    public function withdrawalInfo()
    {
        return $this->belongsTo('App\UserWithdrawalInfo');
    }


}
