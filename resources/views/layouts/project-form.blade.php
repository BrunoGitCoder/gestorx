{{-- New --}}

<div class="modal @if($errors->isEmpty()) fade @endif" tabindex="-1" id="exampleModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="border: none">
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
                                <input name="title" type="text" id="title"
                                    class="form-control @error('title') is-invalid @enderror" 
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
                                id="description" class="form-control @error('description') is-invalid @enderror"" id="
                                validationTextarea" aria-describedby="inputGroupPrepend3 validationDescriptionFeedback"
                                placeholder="Project details go here...">{{ old('description') }}</textarea>
                            @error('description')
                                <div id="validationDescriptionFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="m-0 position-absolute top-0 end-0" id="contador" style="font-size: .8rem">0 / 255</p>
                        </div>
                        <div class="mt-4 text-secondary">
                            <hr>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-outline-danger" style="height: 40px; width: 40px;"
                                data-bs-dismiss="modal">
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <span class="d-flex">
                                        <x-lucide-trash style="height: 18px; width: 18px;" />
                                    </span>
                                </div>
                            </button>
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
        </div>
    </div>
</div>


{{-- edit --}}
<div class="modal @if($errors->isEmpty()) fade @endif" tabindex="-1" id="editModal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="border: none">
                <h5 class="modal-title">Edit Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <p>Modal body text goes here.</p> --}}
                <div class="card-body">
                    <form id="project-form-edit" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="">
                            <label for="title" class="form-label">Title</label>
                            <div class="input-group @error('title') has-validation @enderror">
                                <span class="input-group-text" id="inputGroupPrepend3">
                                    <x-lucide-tag style="height: 18px; width: 18px;" />
                                </span>
                                <input name="title" type="text" id="title-edit"
                                    class="form-control @error('title') is-invalid @enderror" 
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
                                id="description-edit" class="form-control @error('description') is-invalid @enderror"" id="
                                validationTextarea" aria-describedby="inputGroupPrepend3 validationDescriptionFeedback"
                                placeholder="Project details go here...">{{ old('description') }}</textarea>
                            @error('description')
                                <div id="validationDescriptionFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="m-0 position-absolute top-0 end-0" id="contador" style="font-size: .8rem">0 / 255</p>
                        </div>
                        <div class="mt-4 text-secondary">
                            <hr>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-outline-danger" style="height: 40px; width: 40px;"
                                data-bs-dismiss="modal">
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <span class="d-flex">
                                        <x-lucide-trash style="height: 18px; width: 18px;" />
                                    </span>
                                </div>
                            </button>
                            <button type="submmit" class="btn btn-outline-success">
                                <div class="d-flex justify-content-center align-items-center gap-1">
                                    <span class="d-flex">
                                        <x-lucide-save style="height: 18px; width: 18px;" />
                                    </span>
                                    <strong>Modify</strong>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>