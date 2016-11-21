<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class Article extends Model
{
	use ValidatingTrait;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title', 'body', 'status'
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

	/**
	 * Model validation rules
	 *
	 * @var array
	 */
	protected $rules = [
		'title' => 'required|alpha_dash',
		'body' => 'required',
		'slug' => 'required|unique:article,slug'
	];

	/**
	 * Validation messages to be passed to the validator.
	 *
	 * @var array
	 */
	protected $validationMessages = [
		'title.required' => 'title is required',
		'body.required' => 'article is required',
		'slug.unique' => 'This title is already use'
	];

	protected $throwValidationExceptions = true;

	/**
	 * User relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}

	/**
	 * Comment relationship
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments() {
		return $this->hasMany('App\Comment');
	}
}
