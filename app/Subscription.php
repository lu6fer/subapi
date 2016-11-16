<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
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

	/**
	 * Subscription status relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function status() {
		return $this->belongsTo('App\subscriptionStatus', 'status_id');
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
		return $this->belongsToMany('App\Product');
	}
}
