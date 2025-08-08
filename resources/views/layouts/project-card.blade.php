<div class="card hover-scale shadow" id="card-{{$card_id}}" style="width: 18rem; max-width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text text-secondary">{{$description}}</p>
        <a class="normal-a hover-color-secondary btn" data-bs-toggle="collapse" href="#collapseExample{{$card_id}}">
            <div class="text-secondary d-flex justify-content-center align-items-center gap-1">
                Options <span class="d-flex"><x-lucide-square-chevron-down style="height: 18px; width: 18px;" /></span>
            </div>
        </a>
        <div class="collapse mt-3" id="collapseExample{{$card_id}}">
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
                            <div class="d-flex justify-content-center align-items-center gap-1">
                                <span class="d-flex"><x-lucide-trash-2
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