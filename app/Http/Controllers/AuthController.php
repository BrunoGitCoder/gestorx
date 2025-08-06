<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\AuthService;

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
            return redirect()->route('login')->with('success', 'Login');
        }
        else {
            return redirect()->route('login')->with('success', 'Erro');
        }
    }
}
