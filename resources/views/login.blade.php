@extends('layouts.app')

@section('title_page', 'Login GestorX')

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            {{-- Colocar logo aqui dentro--}}
            <h1 class="" style="font-size: 5rem">Gestor</h1>
            <h1 class="text-primary fw-bold" style="font-size: 7rem">X</h1>
        </div>
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                {{-- <h2 class="text-center mb-5">Login</h2> --}}
                <form style="">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                            </svg>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" name="email"
                                placeholder="Email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>
                        </span>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGroup1" name="password"
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Remember me
                        </label>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        {{-- <a href="{{ route('register') }}" class="btn btn-outline-secondary">Create an Account</a> --}}
                        <p class="p-0 m-0 text-center">Don't have an account? <a href="{{ route('register') }}"
                                class="link-primary link-offset-2 link-underline-opacity-0">Create Account</a>
                        </p>
                        <a href="#" class="m-0 text-center link-primary link-offset-2 link-underline-opacity-0">Forgot
                            your Password?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-check form-switch m-5">
            <input class="form-check-input" type="checkbox" id="themeSwitch">
            <label class="form-check-label" for="themeSwitch">Dark Mode</label>
        </div>
    </div>
@endsection