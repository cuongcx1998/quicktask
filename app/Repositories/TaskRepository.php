<?php

namespace App\Repositories;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function store(array $data, $id)
    {
        try
        {
            $user = User::findorfail($id);

            return $user->tasks()->create($data);
        }
        catch (ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
    }
}
