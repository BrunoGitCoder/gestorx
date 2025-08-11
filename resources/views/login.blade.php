@extends('layouts.app')

@section('title_page', 'Login GestorX')

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column gap-4">
        <div class="d-flex justify-content-center align-items-center">
            {{-- Colocar logo aqui dentro--}}
            <h1 class="logo" style="font-size: 5rem">Gestor</h1>
            <h1 class="logo text-primary fw-bold" style="font-size: 7rem">X</h1>
        </div>
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <form action="{{ route('auth.login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <x-lucide-mail style="height: 18px; width: 18px;" />
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" name="email"
                                placeholder="Email" autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <x-lucide-key-round style="height: 18px; width: 18px;" />
                        </span>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInputGroup1" name="password"
                                placeholder="Password" autocomplete="new-password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="remember">
                        <label class="form-check-label" for="gridCheck">
                            Remember me
                        </label>
                    </div>
                    <div class="d-grid gap-3">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        {{-- <a href="{{ route('register') }}" class="btn btn-outline-secondary">Create an Account</a> --}}
                        <p class="p-0 m-0 text-center">Don't have an account? <a href="{{ route('users.create') }}"
                                class="link-primary link-offset-2 link-underline-opacity-0">Create Account</a>
                        </p>
                        <a href="#" class="m-0 text-center link-primary link-offset-2 link-underline-opacity-0">Forgot
                            your Password?</a>
                    </div>
                </form>
            </div>
        </div>

        {{-- button theme --}}
        <div class="btn-group p-4" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
            <label style="width: 30px; height: 30px;" class="btn d-flex justify-content-center align-items-center"
                for="btnradio1">
                <x-lucide-sun style="height: 18px; width: 18px; position:absolute" />
            </label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label style="width: 30px; height: 30px" class="btn d-flex justify-content-center align-items-center"
                for="btnradio2">
                <x-lucide-moon style="height: 18px; width: 18px; position:absolute" />
            </label>
        </div>
    </div>

    {{-- Notifications --}}
    @if(session('success'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast-success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header gap-1">
                    <x-lucide-bookmark-check class="text-success" style="height: 18px; width: 18px;" />
                    <strong class="me-auto">{{ session('user_name') }}</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const toastLiveExample = document.getElementById('liveToast-success');
                if (toastLiveExample) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            });
        </script>
    @endif
    @if (session('error') or $errors->any())
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast-error" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header gap-2">
                    <x-lucide-user-round-x class="text-danger" style="height: 18px; width: 18px;" />
                    <strong class="me-auto">Error</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Authentication error. Invalid email or password.
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const toastLiveExample = document.getElementById('liveToast-error');
                if (toastLiveExample) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            });
        </script>
    @endif
@endsection