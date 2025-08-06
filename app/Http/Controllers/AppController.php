<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showFormLogin()
    {
        return view('login');
    }

    public function showFormRegister()
    {

        return view('register');
    }
}
