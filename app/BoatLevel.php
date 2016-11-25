<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class BoatLevel extends Model
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
		'licence', 'instructor',
		'origin', 'origin_number',
		'date', 'vhf_licence',
		'vhf_licence_number','vhf_date', 'archive'
	];

	/**
	 * The attributes that are not mass assignable
	 *
	 * @var array
	 */
	protected $guarded = [
        'level', 'user_id', 'created_at', 'updated_at'
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
		'licence' => 'required|licence',
		'instructor' => 'text',
		'origin' => 'required|text',
		'origin_number' => 'licence',
		'date' => 'required|date',
		'vhf_licence' => 'required|boolean',
		'vhf_licence_number' => 'required_if:vhf_licence,1|licence',
		'vhf_date' => 'required_if:vhf_licence,1|date',
		'archive' => 'boolean',
		'level' => 'required'
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
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}

	/**
	 * Label relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function label() {
		return $this->belongsTo('App\BoatLabel', 'level');
	}
}