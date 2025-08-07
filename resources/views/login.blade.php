@extends('layouts.app')

@section('title_page', 'Login GestorX')

@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column gap-4">
        <div class="d-flex justify-content-center align-items-center">
            {{-- Colocar logo aqui dentro--}}
            <h1 class="logo" style="font-size: 5rem" style="user-select: none;">Gestor</h1>
            <h1 class="logo text-primary fw-bold" style="font-size: 7rem">X</h1>
        </div>
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <form action="{{ route('auth.login') }}" method="POST" autocomplete="off">
                    @csrf
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
                                placeholder="Email" autocomplete="off">
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-brightness-high-fill position-absolute" viewBox="0 0 16 16">
                    <path
                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                </svg>
            </label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label style="width: 30px; height: 30px" class="btn d-flex justify-content-center align-items-center"
                for="btnradio2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-moon-fill position-absolute" viewBox="0 0 16 16">
                    <path
                        d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                </svg>
            </label>
        </div>
    </div>

    {{-- Notifications --}}
    @if(session('success'))
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast-success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-square-fill text-success" viewBox="0 0 16 16">
                        <path
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                    </svg>
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
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast-error" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-x-square-fill text-danger" viewBox="0 0 16 16">
                        <path
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708" />
                    </svg>
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