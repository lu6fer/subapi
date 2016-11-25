<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Membership extends Model
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
		'licence', 'date', 'magazine', 'tank',
		'regulator', 'supervisor', 'pool_lannion',
		'free_pool', 'pool_trestel', 'local_access',
		'certificat', 'certificat_date'
	];

	/**
	 * The attributes that are not mass assignable
	 *
	 * @var array
	 */
	protected $guarded = [
		'asac_id', 'origin_id', 'insurance_id',
		'created_at', 'updated_at'
	];

	/**
	 * The attributes that are date format
	 * @var array
	 */
	protected $dates = [
		'date', 'certificat_date', 'created_at', 'updated_at'
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
	 * @var bool"asa
	 */
	protected $throwValidationExceptions = true;

	/**
	 * Model validation rules
	 *
	 * @var array
	 */
	protected $rules = [
		'licence' => 'required|licence',
		'date' => 'required|date',
		'magazine' => 'required|boolean',
		'tank' => 'required|boolean',
		'regulator' => 'required|boolean',
		'supervisor' => 'required|boolean',
		'pool_lannion' => 'required|boolean',
		'free_pool' => 'required|boolean',
		'pool_trestel' => 'required|boolean',
		'local_access' => 'required|boolean',
		'certificat' => 'text',
		'certificat_date' => 'required_with:certificat|date'
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
	 * Membership origin relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function origin() {
		return $this->belongsTo('App\MembershipOrigin', 'origin_id');
	}

	/**
	 * Insurance label relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function insurance() {
		return $this->belongsTo('App\InsuranceLabel', 'insurance_id');
	}

	/**
	 * Asac label relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function asac() {
		return $this->belongsTo('App\AsacLabel', 'asac_id');
	}
}
