<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'name', 'first_name', 'email',
	    'street', 'city', 'zip_code', 'phone_number',
	    'mobile_phone', 'pro_phone', 'birth_city',
	    'birth_country', 'birthday'
    ];

	/**
	 * The attributes that are not mass assignable
	 *
	 * @var array
	 */
	protected $guarded = [
		'slug', 'created_at', 'updated_at'
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
	 * Article relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles() {
		return $this->hasMany('App\Article');
	}

	/**
	 * BoatLevel relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function boat() {
		return $this->hasMany('App\BoatLevel');
	}


	/**
	 * Subscription relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function subscriptions() {
        return $this->hasMany('App\Subscription');
    }

    /**
     * Event(owner) relationship
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function organizer() {
        return $this->hasMany('App\Event');
    }

    /**
     * Event(participant) relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function booking() {
        return $this->belongsToMany('App\Event');
    }
}
