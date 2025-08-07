<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
    <div class="container-fluid ps-5 pe-5">
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
            <ul class="navbar-nav ms-3 me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="/equipe">Team</a></li>
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
                            <form class="d-flex justify-content-center" action="{{ route('auth.logout') }}"
                                method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger p-1">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                </li>
                {{-- Botão de tema --}}
                <li class="nav-item d-flex align-items-center">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                        <label style="width: 20px; height: 20px;"
                            class="btn d-flex justify-content-center align-items-center" for="btnradio1">
                            <x-lucide-sun style="height: 16px; width: 16px; position:absolute" />
                        </label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label style="width: 20px; height: 20px"
                            class="btn d-flex justify-content-center align-items-center" for="btnradio2">
                            <x-lucide-moon style="height: 16px; width: 16px; position:absolute" />
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>