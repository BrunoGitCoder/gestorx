<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        
        return redirect()->route('login')->with([
            'success' => 'User Registred Successfully!',
            'user_name' => $request->input('name')
        ]);
    }
}
