<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): Response
    {
        // Only allow admins and super_admins to update users
        if ($user->user_type === 'admin' || $user->user_type === 'super_admin') {
            return Response::allow();
        }

        return Response::deny('You do not have permission to update users.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): Response
    {
        // Prevent users from deleting themselves
        if ($user->id === $model->id) {
            return Response::deny('You cannot delete your own account.');
        }

        // Only allow admins and super_admins to delete other users
        if ($user->user_type === 'admin' || $user->user_type === 'super_admin') {
            return Response::allow();
        }

        return Response::deny('You do not have permission to delete users.');
    }

    // You can keep the remaining methods as they were or remove them if not needed.
    // The following methods will be ignored if not registered or used.
    
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true; // Any authenticated user can view the list.
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        return true; // Any authenticated user can view a specific user.
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }
    
    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return false;
    }
}
