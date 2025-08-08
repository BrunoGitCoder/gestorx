<script>
  document.addEventListener('DOMContentLoaded', () => {
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
        .then(res => res.json())
        .then(data => {
          console.log('✅ Dados recebidos:', data);
          document.querySelector('#title-edit').value = data.title;
          document.querySelector('#description-edit').value = data.description;
          document.querySelector('#card-id-edit').value = data.id;

          const form = document.getElementById('project-form-edit');
          if (form) {
            form.action = `/projects/${data.id}`;
          } else {
            console.warn('⚠️ Formulário de edição não encontrado!');
          }
        })
        .catch(err => console.error('❌ Erro ao buscar projeto:', err));
    });
  });
});

</script>