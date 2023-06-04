<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {

            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            $request->session()->regenerate();

            return response()->json([
                'message' => 'User registration completed',
            ]);

        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return response()->json([
                'error' => $errorMessage
            ], 400);
        }
    }
}
