<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Watson\Validating\ValidatingTrait;

class User extends Authenticatable
{
    use Notifiable, ValidatingTrait;
	/*
    |--------------------------------------------------------------------------
    | Model fields
    |--------------------------------------------------------------------------
    |
	| Fields configurations
    |
    */

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

	/*
    |--------------------------------------------------------------------------
    | Model validations
    |--------------------------------------------------------------------------
    |
	| Fields validations rules and model validation behavior
    |
    */

	/**
	 * Observable validation event
	 * @var array
	 */
	protected $observables = ['validating', 'validated'];

	/**
	 * Always throw exceptions on validation error
	 * @var bool
	 */
	protected $throwValidationExceptions = true;

	/**
	 * Model validation rules
	 *
	 * @var array
	 */
	protected $rules = [
		'name' => 'required|alpha_dash',
		'first_name' => 'required|alpha_dash',
		'email' => 'required|email',
		'street' => 'required|text',
		'city' => 'required|alpha_dash',
		'zip_code' => 'required|digits:5',
		'phone_number' => 'required_without:mobile_phone,pro_phone|phone:AUTO,FR,fixed_line',
		'mobile_phone' => 'required_without:phone_number,pro_phone|phone:AUTO,FR,mobile',
		'pro_phone' => 'required_without:mobile_phone,phone_number|phone:AUTO,FR,fixed_line',
		'birth_city' => 'required|alpha_dash',
		'birth_country' => 'required|alpha_dash',
		'birthday' => 'required|date',
		'slug' => 'required|unique:users,slug'
	];

	/*
    |--------------------------------------------------------------------------
    | Model relationship
    |--------------------------------------------------------------------------
    |
	| Methods defining model relationship
    |
    */

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
	 * Event(participant) relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function booking() {
		return $this->belongsToMany('App\Event');
	}

	/**
	 * DiveLevel relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function dive() {
		return $this->hasMany('App\DiveLevel');
	}

	/**
	 * Membership relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function membership() {
		return $this->hasOne('App\Membership');
	}

	/**
	 * Event(owner) relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function organizer() {
		return $this->hasMany('App\Event', 'owner');
	}

	/**
	 * Subscription relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function subscriptions() {
        return $this->hasMany('App\Subscription');
    }

	/**
	 * TivLevel relationsship
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
    public function tiv() {
	    return $this->hasOne('App\TivLevel');
    }

	/**
	 * Role relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
    public function roles() {
	    return $this->belongsToMany('App\Role');
    }

	/**
	 * Group relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function groups() {
		return $this->belongsToMany('App\Group');
	}
}
