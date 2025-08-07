@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
    <div class="d-flex flex-row flex-wrap gap-3 mt-4 justify-content-center align-items-center mb-5">
        @foreach($projects as $project)
            <div class="card border-secondary shadow-sm" style="width: 18rem;">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="fw-semibold">Project</span>
                    <span class="badge bg-gradient text-white px-2 py-1"
                        style="background: linear-gradient(135deg, #6c757d, #495057); font-size: 0.75rem;">
                        Ativo
                    </span>
                </div>

                <div class="card-body text-secondary d-flex flex-column justify-content-between" style="min-height: 170px;">
                    <div>
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p id="p-desc-{{$project->id}}" class="card-text text-truncate p-0 m-0">
                            {{ $project->description }}
                        </p>
                    </div>


                    <button class="position-relative btn btn-sm btn-outline-secondary mb-2" type="button"
                        data-bs-toggle="collapse" data-bs-target="#tasks-{{$project->id}}">
                        <i class="bi bi-chevron-down me-1"></i> Mostrar Tarefas
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                            4
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>

                    <div class="collapse" id="tasks-{{$project->id}}">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value=""
                                    id="firstCheckboxStretched{{$project->id}}">
                                <label class="form-check-label stretched-link" for="firstCheckboxStretched{{$project->id}}">
                                    Teste
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-muted text-end">
                    <small>Atualizado há 3 min</small>
                </div>
            </div>
        @endforeach

        {{-- Card New Project --}}
        <div class="card border-dashed text-center shadow-sm"
            style="width: 18rem; border: 2px dashed #7a7c7d; height: 254px; max-height: 254px;">
            <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                <i class="bi bi-plus-circle fs-1 text-primary mb-3"></i>
                <h5 class="card-title mb-2">Start a New Project</h5>
                <p class="card-text text-muted">Kick off your task organization with a fresh project.</p>
                <button type="button" class="btn btn-outline-primary d-flex flex-row gap-1" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
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
                                        <x-lucide-tag style="height: 18px; width: 18px;" />
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
                                <textarea maxlength="255" oninput="atualizarContador()" rows="5" name="description"
                                    id="descricao" class="form-control @error('description') is-invalid @enderror"" id="
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
                                        <span class="d-flex">
                                            <x-lucide-save style="height: 18px; width: 18px;" />
                                        </span>
                                        <strong>Add Project</strong>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" style="height: 40px; width: 40px;"
                        data-bs-dismiss="modal">
                        <div class="d-flex justify-content-center align-items-center gap-1">
                            <span class="d-flex">
                                <x-lucide-trash style="height: 18px; width: 18px;" />
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