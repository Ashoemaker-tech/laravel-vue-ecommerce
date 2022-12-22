<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login  (Request $request) {
            $credentials = $request->validate([
                'email' =>'required|email',
                'password' =>'required',
                'remember' => 'boolean'
            ]);

            $remember = $credentials['remember'] ?? false;

            unset($credentials['remember']);

            if (!Auth::attempt($credentials, $remember)) {
                return response([
                    'message' => 'Email or password is incorrect'
                ], 401);
            }

            $user = Auth::user();

            if (!$user->is_admin) {
               Auth::logout(); 

               return response([
                'message' => 'You do not have admin rights'
               ], 403);
            }

            $token = $user->createToken('main')->plainTextToken;

            return response([
                'user' => new UserResource($user),
                'token' => $token
            ]);
        }

        
}
