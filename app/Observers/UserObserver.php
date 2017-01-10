<?php

namespace App\Observers;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class UserObserver
{
	/**
	 * Listen to the User validating event.
	 *
	 * @param  User  $user
	 * @return void
	 */
	public function validating(User $user)
	{
		$user->slug = Str::slug($user->first_name.' '.$user->name);
		$user->zip_code = str_replace(' ', '', $user->zip_code);
	}

	/**
	 * Listen to the User saving event.
	 *
	 * @param  User  $user
	 * @return void
	 */
	public function saving(User $user)
	{
		$password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(20/strlen($x)) )),1,20);
		$user->slug = Str::slug($user->first_name.' '.$user->name);
		$user->password = bcrypt($password);
	}

	public function validated(User $user, $status) {
		if ($status == 'failed') {
			Log::info($user);
		}
	}
}