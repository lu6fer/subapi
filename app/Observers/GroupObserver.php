<?php

namespace App\Observers;

use App\Group;
use Illuminate\Support\Str;

class GroupObserver
{
	/**
	 * Listen to the Group validating event.
	 *
	 * @param  Group $group
	 * @return void
	 */
	public function validating(Group $group)
	{
		$group->slug = Str::slug($group->name);
	}

	/**
	 * Listen to the Group saving event.
	 *
	 * @param  Group $group
	 * @return void
	 */
	public function saving(Group $group)
	{
		$group->slug = Str::slug($group->name);
	}
}