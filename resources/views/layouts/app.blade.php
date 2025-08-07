<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page', 'Default')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        * {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body>
    @auth
        @include('layouts.navbar')
    @endauth

    @yield('content')

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    {{-- Light / Dark theme switch --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const html = document.documentElement;
            const lightRadio = document.getElementById('btnradio1');
            const darkRadio = document.getElementById('btnradio2');
            const lightLabel = document.querySelector('label[for="btnradio1"]');
            const darkLabel = document.querySelector('label[for="btnradio2"]');

            // Função para atualizar classes dos botões
            function updateButtonStyles(theme) {
                if (theme === 'light') {
                    lightLabel.classList.remove('btn-outline-secondary');
                    lightLabel.classList.add('btn-outline-primary');
                    darkLabel.classList.remove('btn-outline-secondary');
                    darkLabel.classList.add('btn-outline-primary');
                } else {
                    lightLabel.classList.remove('btn-outline-secondary');
                    lightLabel.classList.add('btn-outline-secondary');
                    darkLabel.classList.remove('btn-outline-secondary');
                    darkLabel.classList.add('btn-outline-secondary');
                }
            }

            // Verifica tema salvo ou define padrão
            const savedTheme = localStorage.getItem('bsTheme') || 'dark';
            html.setAttribute('data-bs-theme', savedTheme);

            // Marca o botão e atualiza estilos
            if (savedTheme === 'light') {
                lightRadio.checked = true;
            } else {
                darkRadio.checked = true;
            }
            updateButtonStyles(savedTheme);

            // Escuta mudanças
            lightRadio.addEventListener('change', () => {
                html.setAttribute('data-bs-theme', 'light');
                localStorage.setItem('bsTheme', 'light');
                updateButtonStyles('light');
            });

            darkRadio.addEventListener('change', () => {
                html.setAttribute('data-bs-theme', 'dark');
                localStorage.setItem('bsTheme', 'dark');
                updateButtonStyles('dark');
            });
        });
    </script>


</body>

</html>