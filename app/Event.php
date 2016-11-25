<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Event extends Model
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
        'title', 'description', 'date',
        'max_participants', 'max_booking_date'
    ];

    /**
     * The attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = [
        'owner', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that are date format
     * @var array
     */
    protected $dates = [
        'date', 'created_at', 'updated_at'
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
		'title' => 'required|text',
		'description' => 'text',
		'date' => 'required|date',
		'max_participants' => 'required|numeric',
		'max_booking_date' => 'required|date',
		'slug' => 'required|unique:articles,slug'
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
     * User(owner) relationship
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function owner() {
        return $this->belongsTo('App\User', 'owner');
    }

    /**
     * User(participants) relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participants() {
        return $this->belongsToMany('App\User');
    }
}
