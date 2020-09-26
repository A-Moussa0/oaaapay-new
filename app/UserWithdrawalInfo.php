<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWithdrawalInfo extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'withdrawal_option_id', 'mobile_number', 'arabic_name', 'gov_id', 'email',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function withdrawalOption()
    {
        return $this->belongsTo('App\WithdrawalOption');
    }
}
