<script>
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function () {
            const projectId = this.getAttribute('data-id');
            console.log('🔍 Editando projeto ID:', projectId);

            fetch(`/projects/${projectId}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
                .then(res => {
                    console.log('📦 Resposta bruta:', res);
                    return res.json();
                })
                .then(data => {
                    console.log('✅ Dados recebidos:', data);

                    // Preenche os campos do formulário
                    document.querySelector('#title').value = data.title;
                    document.querySelector('#description').value = data.description;
                })
                .catch(err => console.error('❌ Erro ao buscar projeto:', err));
        });
    });

</script>