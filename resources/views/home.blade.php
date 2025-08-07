@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
    <div class="d-flex flex-row flex-wrap gap-3 mt-4 justify-content-center align-items-center mb-5">
        @for ($i = 1; $i <= 3; $i++)
            <div class="card border-secondary shadow-sm" style="width: 18rem;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">Projeto #{{ $i }}</span>
                    <span class="badge bg-gradient text-white px-2 py-1"
                        style="background: linear-gradient(135deg, #6c757d, #495057); font-size: 0.75rem;">
                        Ativo
                    </span>
                </div>

                <div class="card-body text-secondary d-flex flex-column justify-content-between" style="min-height: 170px;">
                    <div>
                        <h5 class="card-title">GestorX CRM</h5>
                        <p class="card-text text-truncate">
                            Sistema de gestão de clientes com integração de tarefas e equipe.
                            Sistema de gestão de clientes com integração de tarefas e equipe.
                            Sistema de gestão de clientes com integração de tarefas e equipe.
                        </p>
                    </div>

                    <button class="btn btn-sm btn-outline-secondary mb-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#tasks-{{ $i }}">
                        <i class="bi bi-chevron-down me-1"></i> Mostrar Tarefas
                    </button>

                    <div class="collapse" id="tasks-{{ $i }}">
                        <ul class="list-group list-group-flush mb-2">
                            @for ($x = 1; $x <= rand(2, 5); $x++)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Tarefa {{ $x }}</span>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <form action="" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success" title="Marcar como feita">
                                                <i class="bi bi-check2">O</i>
                                            </button>
                                        </form>
                                        <form action="" method="POST"
                                            onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" title="Excluir tarefa">
                                                <i class="bi bi-trash">X</i>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-muted text-end">
                    <small>Atualizado há 3 min</small>
                </div>
            </div>

        @endfor

        {{-- Card New Project --}}
        <div class="card border-dashed text-center shadow-sm"
            style="width: 18rem; border: 2px dashed #7a7c7d; height: 254px; max-height: 254px;">
            <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                <i class="bi bi-plus-circle fs-1 text-primary mb-3"></i>
                <h5 class="card-title mb-2">Start a New Project</h5>
                <p class="card-text text-muted">Kick off your task organization with a fresh project.</p>
                <button type="button" class="btn btn-outline-primary d-flex flex-row gap-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span class="d-flex justify-content-center align-items-center">
                        <x-lucide-diamond-plus style="height: 18px; width: 18px;" />
                    </span>
                    <strong>New Project</strong>
                </button>
            </div>
        </div>
    </div>

    {{-- Modal New Projects --}}
    <div class="modal @if($errors->isEmpty()) fade @endif" tabindex="-1" id="exampleModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <p>Modal body text goes here.</p> --}}
                    <div class="card-body">
                        <form action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            <div class="">
                                <label for="title" class="form-label">Title</label>
                                <div class="input-group @error('title') has-validation @enderror">
                                    <span class="input-group-text" id="inputGroupPrepend3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-tag-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                        </svg>
                                    </span>
                                    <input name="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        aria-describedby="inputGroupPrepend3 validationTitleFeedback"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <div id="validationTitleFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Description</label>
                                <textarea maxlength="255" oninput="atualizarContador()" rows="5" name="description" id="descricao"
                                    class="form-control @error('description') is-invalid @enderror"" id="
                                    validationTextarea" aria-describedby="inputGroupPrepend3 validationDescriptionFeedback"
                                    placeholder="Required example textarea">{{ old('description') }}</textarea>
                                <div class="d-flex justify-content-end m-0 p-0">
                                    <p class="m-0" id="contador">0 / 255</p>
                                </div>
                                @error('description')
                                    <div id="validationDescriptionFeedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="submmit" class="btn btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <div class="d-flex justify-content-center align-items-center gap-1">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor"
                                                class="bi bi-floppy2-fill d-flex justify-content-center align-items-center"
                                                viewBox="0 0 16 16">
                                                <path d="M12 2h-2v3h2z" />
                                                <path
                                                    d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1" />
                                            </svg>
                                        </span>
                                        <strong>Add Project</strong>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                        <div class="d-flex justify-content-center align-items-center gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3-fill d-flex justify-content-center align-items-center"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </span>
                            {{-- <span>
                                Abort
                            </span> --}}
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Contador textarea caracteres --}}
    <script>
        function atualizarContador() {
            const textarea = document.getElementById("descricao");
            const contador = document.getElementById("contador");
            contador.textContent = `${textarea.value.length} / ${textarea.maxLength}`;
        }
    </script>
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const modalElement = document.getElementById('exampleModal');
                const modal = new bootstrap.Modal(modalElement);
                modal.show();
            });
        </script>
    @endif

@endsection