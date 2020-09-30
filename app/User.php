<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Joselfonseca\LighthouseGraphQLPassport\HasLoggedInTokens;
use Joselfonseca\LighthouseGraphQLPassport\MustVerifyEmailGraphQL;
use Joselfonseca\LighthouseGraphQLPassport\HasSocialLogin;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, HasSocialLogin, MustVerifyEmailGraphQL, HasLoggedInTokens;

    /**
        * The attributes that are mass assignable.
        *
        * @var array
    */
    protected $fillable = [
        'email', 'referrer_id', 'membership_id', 'password', 'mobile', 'signup_ip', 'username', 'email_verified_at', 'mobile_verified_at', 'avatar', 'provider_id', 'provider', 'remember_token', 'created_at', 'updated_at', 'source', 'last_active',
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
        'mobile_verified_at' => 'datetime',
        'last_active' => 'datetime',
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

    public function offerRecords()
    {
        return $this->hasMany('App\OfferRecord');
    }

    public function thirdpartyTaskRecords()
    {
        return $this->hasMany('App\ThirdpartyTaskRecord');
    }

    public function advertisementRecords()
    {
        return $this->hasMany('App\AdvertisementRecord');
    }

    public function feedbackSurveyRecords()
    {
        return $this->hasMany('App\FeedbackSurveyRecord');
    }

    public function favoriteOffers()
    {
        return $this->belongsToMany('App\Offer')->using('App\FavoriteOfferUser');
    }

    public function withdrawalRequests()
    {
        return $this->hasMany('App\WithdrawalRequest');
    }

    public function commissionRecords()
    {
        return $this->hasMany('App\CommissionRecord');
    }

    public function appenInitializes()
    {
        return $this->hasMany('App\AppenInitialize', 'foreign_key', 'local_key');
    }

    public function appenCompleteRecords()
    {
        return $this->hasMany('App\AppenCompleteRecord');
    }

    public function exclusivepointMerchants()
    {
        return $this->belongsToMany('App\Merchant')
        ->using('App\ExclusivepointMerchantUser')
        ->withPivot([
            'exclusive_points'
        ]);
    }

    public function withdrawalInfos()
    {
        return $this->hasMany('App\UserWithdrawalInfo');
    }

    public function ipLogs()
    {
        return $this->hasMany('App\UserIpLog');
    }

    public function userProfileInfos()
    {
        return $this->hasOne('App\UserProfileInfos');
    }

    public function membership()
    {
        return $this->belongsTo('App\Membership');
    }
}
