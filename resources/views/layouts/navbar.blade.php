<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/">
            <div class="d-flex justify-content-center align-items-center">
                {{-- Colocar logo aqui dentro--}}
                <h1 class="logo m-0 p-0" style="font-size: 1.5rem" style="user-select: none;">Gestor</h1>
                <h1 class="logo m-0 p-0 text-primary fw-bold" style="font-size: 2rem">X</h1>
            </div>
        </a>

        {{-- Botão de menu mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Conteúdo da navbar --}}
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="/projetos">Projetos</a></li>
                <li class="nav-item"><a class="nav-link" href="/equipe">Equipe</a></li>
            </ul>

            {{-- Área de usuário e tema --}}
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Olá, <strong>{{ explode(' ', Auth::user()->name)[0] }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li><a class="dropdown-item" href="#">Opc#</a></li>
                        <li><a class="dropdown-item" href="#">Opc#</a></li>
                        <li><a class="dropdown-item" href="#">Opc#</a></li>
                        <li><a class="dropdown-item" href="#">Opc#</a></li> --}}
                        <li>
                            <form class="d-flex justify-content-center" action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger p-1">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                {{-- Botão de tema --}}
                <li class="nav-item d-flex align-items-center">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                        <label style="width: 20px; height: 20px;"
                            class="btn d-flex justify-content-center align-items-center" for="btnradio1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                class="bi bi-brightness-high-fill position-absolute" viewBox="0 0 16 16">
                                <path
                                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                            </svg>
                        </label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label style="width: 20px; height: 20px"
                            class="btn d-flex justify-content-center align-items-center" for="btnradio2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                                class="bi bi-moon-fill position-absolute" viewBox="0 0 16 16">
                                <path
                                    d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                            </svg>
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>