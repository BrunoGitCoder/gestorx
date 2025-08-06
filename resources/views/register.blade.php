@extends('layouts.app')

@section('title_page', 'Register GestorX')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-column p-4">
        <div class="d-flex justify-content-center align-items-center">
            {{-- Colocar logo aqui dentro--}}
            <h1 class="" style="font-size: 5rem">Gestor</h1>
            <h1 class="text-primary fw-bold" style="font-size: 7rem">X</h1>
        </div>
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <div class="card-body ">
                <h2 class="text-center mb-5">Create a New Account</h2>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="validationServerUsername" class="form-label">Name</label>
                        <div class="input-group @error('name') has-validation @enderror">
                            <span class="input-group-text" id="inputGroupPrepend3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </span>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                id="validationServerUsername"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                                value="{{ old('name') }}">
                            @error('name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="validationServerUsername" class="form-label">Email</label>
                        <div class="input-group @error('email') has-validation @enderror">
                            <span class="input-group-text" id="inputGroupPrepend3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                            </span>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="validationServerUsername"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                                value="{{ old('email') }}">
                            @error('email')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="validationServerUsername" class="form-label">Password</label>
                        <div class="input-group @error('password') has-validation @enderror">
                            <span class="input-group-text" id="inputGroupPrepend3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                            </span>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="validationServerUsername"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                            @error('password')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="validationServerUsername" class="form-label">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <a href="{{ route('login') }}"
                            class="m-0 text-center link-primary link-offset-2 link-underline-opacity-0">Back to Sign In</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-check form-switch m-5">
            <input class="form-check-input" type="checkbox" id="themeSwitch">
            <label class="form-check-label" for="themeSwitch" id="txtLabel">Dark Mode</label>
        </div>
    </div>
@endsection