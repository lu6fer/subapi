<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Subscription extends Model
{
	use ValidatingTrait;
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
		'expiration_date'
	];

	/**
	 * The attributes that are not mass assignable
	 *
	 * @var array
	 */
	protected $guarded = [
		'user_id', 'status_id', 'origin_id', 'created_at', 'updated_at'
	];

	/**
	 * The attributes that are date format
	 * @var array
	 */
	protected $dates = [
		'expiration_date', 'created_at', 'updated_at'
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
		'expiration_date' => 'required|date'
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
	 * Subscription status relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function status() {
		return $this->belongsTo('App\SubscriptionStatus', 'status_id');
	}

	/**
	 * User relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user() {
        return $this->belongsTo('App\User');
    }

	/**
	 * Origin relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function origin() {
		return $this->belongsTo('App\MembershipOrigin', 'origin_id');
	}

	/**
	 * Products relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function products() {
		return $this->belongsToMany('App\Product', 'subscription_product');
	}

	/**
	 * Invoice relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function invoice() {
		return $this->hasOne('App\Invoice');
	}
}
