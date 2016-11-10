<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'name', 'first_name', 'email',
	    'street', 'city', 'zip_code', 'phone_number',
	    'mobile_phone', 'pro_phone', 'birth_city',
	    'birth_country', 'birthday'
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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


	public function sluggify($user) {
		Log::info('Sluggify method for : '.$user->name);
		$user->slug = Str::slug($user->first_name.' '.$user->name);
	}
}
