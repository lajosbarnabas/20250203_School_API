<?php

namespace App\Policies;

use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StudentPolicy
{
    public function before(User $user){
        if($user->is_admin){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Student $student): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Student $student): bool
    {
        // return $user->is_admin;
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Student $student): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Student $student): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Student $student): bool
    {
        return false;
    }
}
