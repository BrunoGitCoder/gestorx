<div class="card hover-scale shadow card-project" id="card-{{$card_id}}" style="width: 18rem; max-width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text text-secondary">{{$description}}</p>
        <a class="normal-a hover-color-secondary btn" data-bs-toggle="collapse" href="#collapseExample{{$card_id}}"
            data-card-id="{{$card_id}}" data-status="hidden">
            <div class="text-secondary d-flex justify-content-center align-items-center gap-1">
                Options <span class="d-flex"><x-lucide-square-chevron-down style="height: 18px; width: 18px;" /></span>
            </div>
        </a>
        <div class="collapse mt-3 card-opc" id="collapseExample{{$card_id}}">
            <div class=" card-body">
                <div class="p-0 m-0 d-flex justify-content-around">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button class="btn btn-outline-secondary btn-edit" data-id="{{$card_id}}" data-bs-toggle="modal"
                            data-bs-target="#editModal">
                            <div class="d-flex justify-content-center align-items-center gap-1">
                                <span class="d-flex"><x-lucide-square-pen
                                        style="height: 18px; width: 18px;" /></span>Edit
                            </div>
                        </button>
                        <button class="btn btn-outline-danger">
                            <div class="d-flex justify-content-center align-items-center gap-1" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{$card_id}}">
                                <span class="d-flex"><x-lucide-grid-2x2-x
                                        style="height: 18px; width: 18px;" /></span>Delete
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-secondary">

        <a class="normal-a" data-bs-toggle="collapse" href="#collapseExample2{{$card_id}}">
            <div class="btn hover-color-secondary d-flex align-items-center justify-content-between mb-2">
                <div class="row">
                    <h6 class="card-title col m-0">Tasks</h6><span class="badge text-bg-secondary col">0</span>
                </div>
                <x-lucide-plus style="height: 18px; width: 18px;" />
            </div>
        </a>
        <div class="collapse mt-3" id="collapseExample2{{$card_id}}">
            <ul class="list-group">
                {{-- implementar bacno de dados depois em um novo layout --}}
                <li class="list-group-item hover-color-secondary dropend">
                    <input style="cursor: pointer;" class="form-check-input me-1" type="checkbox" value=""
                        id="firstCheckbox">
                    <label>First</label>
                    <button type="button" class="btn2 p-1 hover-color-secondary" id="btn-task_id"
                        style="position: absolute; right: 4px; top: 50%; transform: translateY(-50%);" 0
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span><x-lucide-chevron-right style="height: 18px; width: 18px;" class="" /></span>
                    </button>
                    <div class="dropdown-menu p-2" style="z-index: 10" id="task-opc">
                        <button class="btn btn-outline-secondary" style="width: 100%;">
                            <span><x-lucide-square-pen style="height: 18px; width: 18px;" /></span>Edit
                        </button>
                        <button class="btn btn-outline-danger mt-2" style="width: 100%;">
                            <span><x-lucide-trash style="height: 18px; width: 18px;" /></span>Delete
                        </button>
                    </div>
                </li>
                {{-- --------------------------------------------------------------------------- --}}
                <li class="list-group-item hover-color-secondary" style="border: 2px dashed #7a7c7d;">
                    <div class="m-0 p-0 d-flex justify-content-center align-items-center gap-1">
                        <span class="d-flex"><x-lucide-list-todo style="height: 18px; width: 18px;" /></span>New Task
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="deleteModal{{$card_id}}" data-bs-backdrop="static" aria-labelledby="deleteModalLabel{{$card_id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel{{$card_id}}">Confirm Deletion</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>Are you sure you want to delete the project <strong>{{ $title }}</strong>?</p>
                <p class="text-muted mb-0">This action cannot be undone.</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>

                <form action="{{ route('projects.destroy', $card_id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast-success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-square-fill text-success" viewBox="0 0 16 16">
                        <path
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
                    </svg>
                    <strong class="me-auto">{{ session('user_name') }}</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const toastLiveExample = document.getElementById('liveToast-success');
                if (toastLiveExample) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            });
        </script>
    @endif