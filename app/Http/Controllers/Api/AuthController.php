<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rules; 

use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
         
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid email or password.'],
            ]);
        }
        $user = Auth::user();
        $token = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
            'token_type' => 'Bearer',
            'message' => 'Login successful',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
 
   }


//    public function register(Request $request){


//     $request->validate([
//         'username' => ['required', 'string', 'max:255', 'unique:' ],

//         'full_name' => ['required', 'string', 'max:255'],

//         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' ],
//         'password' => ['required', 'confirmed'],
//     ]);

//     $user = User::create([
//         'username' => $request->username,
//         'full_name' => $request->full_name,
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//         'user_type' => 'user', 

//     ]);


//     return response()->json(['message' => 'Registration successful! Please log in.'], 201);


//    }



public function register(Request $request)
{
    //  $request->validate([
    //         'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
    //         'full_name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    $user = User::create([
        
        'username' => $request->username,
        'full_name' => $request->full_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'user_type' => 'user', 
    ]);
    
    $token = $user->createToken('auth-token')->plainTextToken;

    return response()->json([
        'user' => $user,
        'token' => $token,
        'token_type' => 'Bearer',
    ], 201); 
}



public function forgetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

   

    return response()->json(['message' => 'Password reset link sent to your email.']);

}


public function resetPassword(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|confirmed|min:8',
    ]);

    $user = User::where('email', $request->email)->first();
    if ($user) {
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['message' => 'Password reset successful.']);
    }

    return response()->json(['message' => 'User not found.'], 404);


}

}