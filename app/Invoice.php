<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'invoice_number', 'status'
	];

	/**
	 * The attributes that are not mass assignable
	 *
	 * @var array
	 */
	protected $guarded = [
		'subscription_id', 'created_at', 'updated_at'
	];

	/**
	 * Status relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function invoice_status() {
		return $this->belongsTo('App\InvoiceStatus', 'status');
	}

	/**
	 * Subscription relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function subscription() {
		return $this->belongsTo('App\Subscription');
	}
}
