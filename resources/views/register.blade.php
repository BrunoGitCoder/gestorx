@extends('layouts.app')

@section('title_page', 'Register GestorX')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-column p-4">
        <div class="d-flex justify-content-center align-items-center m-5">
            <h1 class="" style="font-size: 5rem">Gestor</h1>
            <h1 class="text-primary fw-bold" style="font-size: 7rem">X</h1>
        </div>
        <div class="card p-4 shadow mb-5" style="width: 100%; max-width: 400px;">
            <div class="card-body ">
                <h2 class="text-center mb-5">Create a New Account</h2>
                <form action="{{ route('users.store') }}" method="POST" class="row g-2">
                    @csrf
                    <div class="">
                        <label for="validationServerUsername" class="form-label">Name</label>
                        <div class="input-group @error('name') has-validation @enderror">
                            <span class="input-group-text" id="inputGroupPrepend3">
                                <x-lucide-user style="height: 18px; width: 18px;" />
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
                    <div class="">
                        <label for="validationServerUsername" class="form-label">Email</label>
                        <div class="input-group @error('email') has-validation @enderror">
                            <span class="input-group-text" id="inputGroupPrepend3">
                                <x-lucide-mail style="height: 18px; width: 18px;" />
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
                    <div class="">
                        <label for="validationServerUsername" class="form-label">Password</label>
                        <div class="input-group @error('password') has-validation @enderror">
                            <span class="input-group-text" id="inputGroupPrepend3">
                                <x-lucide-key-round style="height: 18px; width: 18px;" />
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
                    <div class="">
                        <label for="validationServerUsername" class="form-label">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                    </div>
                    <div class="d-grid gap-3 mt-4">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                        <a href="{{ route('login') }}"
                            class="m-0 text-center link-primary link-offset-2 link-underline-opacity-0">Back to Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection