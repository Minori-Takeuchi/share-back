<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{

    public function logout()
    {
        if (Auth::guest()) {
            return response()->json([
                'message' => 'Already Unauthenticated',
            ],401);
        }

        Auth::logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ],200);
    }
}
