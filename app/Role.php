<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
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

	/**
	 * User relationship
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users() {
		return $this->belongsToMany('App\User');
	}
}
