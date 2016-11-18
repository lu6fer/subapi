<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'licence', 'date', 'magazine', 'tank',
		'regulator', 'supervisor', 'pool_lannion',
		'free_pool', 'pool_trestel', 'local_access'
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
		'date', 'created_at', 'updated_at'
	];

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
