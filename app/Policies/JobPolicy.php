<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class JobPolicy
{
	public function edit(User $user, Job $job): bool
	{
		return $job->employer->user->is(Auth::user());
	}
}
