<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{

    protected UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $this->userService->createNewUser($request);

        return redirect()->route('login')->with([
            'success' => 'User Registred Successfully!',
            'user_name' => $request->input('name')
        ]);
    }
}
