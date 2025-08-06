<?php

namespace App\Services;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class UserService
{
    public function createNewUser(RegisterRequest $request){
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
    }
}