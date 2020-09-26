<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirdpartyTaskRecord extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'user_id', 'thirdparty_task_id', 'transaction_id', 'uuid', 'action', 'ip', 'reward', 'credit_date', 'declined_at', 'status', 'complete_count',
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

    public function thirdpartyTask()
    {
        return $this->belongsTo('App\ThirdpartyTask');
    }

    public function commissionRecord()
    {
        return $this->morphOne('App\CommissionRecord', 'sourcable');
    }
}
