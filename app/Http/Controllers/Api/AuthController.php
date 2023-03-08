<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends \App\Http\Controllers\Controller
{
    public function getUser(Request $request)
    {

        //any of the following method will work

        //return new UserResource(Auth::user());
        return new UserResource($request->user());
    }
    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
            'remember' => 'boolean'
        ]);

        $remember = $credential['remember'] ?? false;
        unset($credential['remember']);
        if (!Auth::attempt($credential, $remember)) {
            return response([
                'message' => 'Email or password is incorrect'
            ], 422);
        }
        /**
         * @var \App\Models\User $user
         */
        $user = Auth::user();
        if (!$user->is_admin) {
            if (!$user->is_admin) {
                $token = $user->createToken('main')->plainTextToken;

                return response([
                    'user' => new UserResource($user),
                    'token' => $token,
                    'isClient' => true
                ], 200);
            } else {
                Auth::logout();
            }

            return response(['message' => 'You don\'t have permission to authenticate as admin'], 403);
        }

        $token = $user->createToken('main')->plainTextToken;

        return response([
            'user' => new UserResource($user),
            'token' => $token,
            'isClient' => false
        ], 200);
    }

    public function logout()
    {
        /**
         * @var \App\Models\User $user
         */
        $user = Auth::user();
        $user->currentAccessToken()->delete();

        return response('', 204);
    }

}