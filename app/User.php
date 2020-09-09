<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'email', 'referrer_id' 'password', 'mobile', 'signup_ip', 'username', 'registration_date', 'email_verified_at', 'mobile_verified_at', 'avatar', 'provider_id', 'provider', 'remember_token', 'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
    * A user has a referrer.
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }

    /**
     * A user has many referrals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function referrals()
    {
        return $this->hasMany(User::class, 'referrer_id', 'id');
    }
    }
