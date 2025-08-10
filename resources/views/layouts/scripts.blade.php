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

<script>
    // Para TODOS os cards na tela
    document.querySelectorAll('.card-project').forEach((card) => {
        const link = card.querySelector('a[data-bs-toggle="collapse"][data-status]');
        if (!link) return;

        // alvo do collapse (pode vir de href ou data-bs-target)
        const targetSelector = link.getAttribute('data-bs-target') || link.getAttribute('href');
        const target = targetSelector ? document.querySelector(targetSelector) : null;

        // 1) Ao clicar no link, marcar como "show"
        link.addEventListener('click', () => {
            link.dataset.status = 'show';
        });

        // 2) Manter sincronizado com os eventos do Bootstrap (mais confiável)
        if (target) {
            target.addEventListener('shown.bs.collapse', () => {
                link.dataset.status = 'show';
            });
            target.addEventListener('hidden.bs.collapse', () => {
                link.dataset.status = 'hidden';
            });
        }

        // 3) Ao sair do card com o mouse, se estiver "show", clicar para fechar
        card.addEventListener('mouseleave', () => {
            document.body.click();
            if (link.dataset.status === 'show') {
                link.click();
                // O evento "hidden.bs.collapse" vai atualizar o data-status para "hidden"
            }
        });
    });
</script>

<script>
document.querySelectorAll('.btn-edit').forEach(function(button) {
    button.addEventListener('click', function() {
        const projectId = this.dataset.id; // pega o data-id
        const form = document.getElementById('project-form-edit');
        
        // Define a nova rota (ajuste conforme sua rota real)
        form.action = "{{ route('projects.update', ':id') }}".replace(':id', projectId);
    });
});
</script>