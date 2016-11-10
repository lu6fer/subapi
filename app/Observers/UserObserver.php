<?php

namespace App\Observers;

use App\User;
use Illuminate\Support\Str;

class UserObserver
{
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
}