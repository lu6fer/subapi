<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Role extends Model
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
		'name', 'description'
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
	 * The attributes that are date format
	 * @var array
	 */
	protected $dates = [
		'created_at', 'updated_at'
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
		'description' => 'required|text',
		'slug' => 'required|unique:roles,slug'
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
	 * User relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users() {
		return $this->belongsToMany('App\User');
	}
}
