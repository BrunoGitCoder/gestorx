<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function authLogin(AuthRequest $request)
    {
        if ($this->authService->authLogin($request)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Authentication error. Invalid email or password.');
        }
    }

    public function authLogout()
    {
        $name = Auth::user()->name;
        $this->authService->authLogout();
        return redirect()->route('login')->with([
            'success' => 'Logout completed successfully.',
            'user_name'=> $name
        ]);
    }
}
