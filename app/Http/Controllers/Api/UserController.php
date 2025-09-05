<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use App\Http\Resources\UserResource; // You must create this resource

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $users = User::all();
        // Return a collection of users using the API Resource
        return UserResource::collection($users);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): UserResource
    {
        // Return a single user using the API Resource
        return new UserResource($user);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): UserResource
    {
        Gate::authorize('update', $user);
        
        $validatedData = $request->validate([
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'full_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'user_type' => ['required', Rule::in(['super_admin', 'admin', 'user'])],
        ]);
        
        $user->update($validatedData);
        
        // Return the updated user as a JSON response
        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): Response
    {
        Gate::authorize('delete', $user);
        $user->delete();
        // Return a 204 No Content response for a successful deletion
        return response()->noContent();
    }
}
