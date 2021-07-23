<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', $request->email)->first();//Retrieve the first model matching the query constraints...
        if (! $user || ! Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ["The provided data is incorrect"]
            ]);
        }

        return $user->createToken($request->email)->plainTextToken;
    }

    public function logout()
    {
        Auth::logout();
//        $request->user()->currentAccessToken()->delete();
//        return response()->json(['msg' => 'Logout Successfull']);
    }
}
