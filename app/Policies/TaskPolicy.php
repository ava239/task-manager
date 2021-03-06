<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    public function viewAny(?User $user): bool
    {
        return true;
    }

    public function view(?User $user): bool
    {
        return true;
    }

    public function create(?User $user): bool
    {
        return Auth::check();
    }

    public function update(User $user, Task $task): bool
    {
        return Auth::check();
    }

    public function delete(User $user, Task $task)
    {
        return $user->is($task->creator);
    }
}
