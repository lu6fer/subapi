<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'description', 'price'
	];

	/**
	 * The attributes that are not mass assignable
	 *
	 * @var array
	 */
	protected $guarded = [
		'slug', 'parent_product', 'created_at', 'updated_at'
	];

	/**
	 * The attributes that are date format
	 * @var array
	 */
	protected $dates = [
		'created_at', 'updated_at'
	];

	/**
	 * Child product relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function children() {
		return $this->hasMany('App\Product', 'parent_product');
	}

	/**
	 * Parent product relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function parent() {
		return $this->belongsTo('App\Product', 'parent_product');
	}

	/**
	 * Subscription plan relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function subscriptions() {
		return $this->belongsToMany('App\Subscription', 'subscription_product');
	}
}
