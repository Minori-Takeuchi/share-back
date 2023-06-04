<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {

            if (Auth::attempt($request->only('email', 'password'))) {
                return response()->json([
                    'message' => 'Successfully logged in'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Invalid credentials'
                ], 401);
            }

        } catch(\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json([
                'error' => $errorMessage
            ], 500);
        }

    }
}
