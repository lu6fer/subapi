<?php

namespace App\Observers;

use App\Role;
use Illuminate\Support\Str;

class RoleObserver
{
	/**
	 * Listen to the Role validating event.
	 *
	 * @param  Role $role
	 * @return void
	 */
	public function validating(Role $role)
	{
		$role->slug = Str::slug($role->name);
	}

	/**
	 * Listen to the Role saving event.
	 *
	 * @param  Role $role
	 * @return void
	 */
	public function saving(Role $role)
	{
		$role->slug = Str::slug($role->name);
	}
}