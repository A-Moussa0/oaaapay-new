<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfileInfo extends Model
{
    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'user_id', 'country_id', 'date_of_birth', 'gender', 'marital_status', 'kids', 'house', 'work_industry', 'job_title', 'car', 'first_name', 'last_name',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
