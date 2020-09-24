<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thirdparty extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name', 'has_tasks', 'has_surveys', 'commission_percentage', 'payment_method', 'payment_term', 'total_revenue_usd', 'current_month_revenue_usd', 'last_month_revenue_usd', 'disabled', 'icon', 'logo',
    ];

    public function surveys()
    {
        return $this->hasMany('App\ThirdpartySurvey');
    }
}
