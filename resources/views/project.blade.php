@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
<h1 class="text-center py-4">Projects Board</h1>
    <div class="d-flex flex-row flex-wrap gap-3 mt-4 justify-content-center align-items-center mb-5">
        @foreach($projects as $project)
            @include('layouts.projectCard',[
                'title' => $project->title,
                'description' => $project->description,
                'card_id' => $project->id
            ])
        @endforeach
        {{-- Card New Project --}}
        <div class="card border-dashed text-center shadow-sm"
            style="width: 18rem; border: 2px dashed #7a7c7d;">
            <div class="card-body d-flex flex-column justify-content-center align-items-center py-4 gap-2">
                <h5 class="card-title text-center">Start a New Project</h5>
                 <p class="card-text text-center">Kick off your task organization with a fresh project.</p>
                 <button class="btn btn-outline-primary">
                     <div class="d-flex justify-content-center align-items-center gap-1"data-bs-toggle="modal" data-bs-target="#exampleModal">
                         <span class="d-flex"><x-lucide-blocks style="height: 18px; width: 18px;" /></span>New Project
                     </div>
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
                            <div class="mt-3 mb-3 position-relative">
                                <label for="validationTextarea" class="form-label">Description</label>
                                <textarea maxlength="255" oninput="atualizarContador()" rows="5" name="description"
                                    id="descricao" class="form-control @error('description') is-invalid @enderror"" id="
                                    validationTextarea" aria-describedby="inputGroupPrepend3 validationDescriptionFeedback"
                                    placeholder="Required example textarea">{{ old('description') }}</textarea>
                                @error('description')
                                    <div id="validationDescriptionFeedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="m-0 position-absolute top-0 end-0" id="contador">0 / 255</p>
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