<?php

namespace App\Services;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function authLogin(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            return true;
        } else {
            return false;
        }
    }

    public function authLogout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}