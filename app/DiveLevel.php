<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiveLevel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level', 'licence', 'instructor',
        'origin', 'origin_number', 'date'
    ];

    /**
     * The attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = [
        'user_id', 'created_at', 'updated_at'
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
        return $this->hasOne('App\DiveLabel', 'id', 'level');
    }
}
