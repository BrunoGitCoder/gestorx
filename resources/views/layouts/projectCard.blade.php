<div class="card hover-scale" style="width: 18rem; max-width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text text-secondary">{{$description}}</p>
        <p class="d-inline-flex gap-1 m-0">
            <a class="normal-a text-secondary" data-bs-toggle="collapse" href="#collapseExample{{$card_id}}">
                Options <x-lucide-square-chevron-down style="height: 18px; width: 18px;" />
            </a>
        </p>
        <div class="collapse mt-3" id="collapseExample{{$card_id}}">
            <div class="card card-body">
                <div class="p-0 m-0 d-flex justify-content-around">
                    <button class="btn btn-outline-primary">
                        <div class="d-flex justify-content-center align-items-center gap-1">
                            <span class="d-flex"><x-lucide-square-pen style="height: 18px; width: 18px;" /></span>Edit
                        </div>
                    </button>
                    <button class="btn btn-outline-danger">
                        <div class="d-flex justify-content-center align-items-center gap-1">
                            <span class="d-flex"><x-lucide-trash-2 style="height: 18px; width: 18px;" /></span>Delete
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <hr class="text-secondary">

        <a class="normal-a" data-bs-toggle="collapse" href="#collapseExample2{{$card_id}}">
            <div class="btn hover-color-secondary d-flex align-items-center justify-content-between mb-2">
                <div class="row">
                    <h6 class="card-title col m-0">Tasks</h6><span class="badge text-bg-secondary col">1</span>
                </div>
                <x-lucide-plus style="height: 18px; width: 18px;" />
            </div>
        </a>
        <div class="collapse mt-3" id="collapseExample2{{$card_id}}">
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                    <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                    <span><x-lucide-chevron-right style="height: 18px; width: 18px;"
                            class="position-absolute top-50 end-0 translate-middle" /></span>
                </li>
            </ul>
            <ul class="hover-color-secondary list-group mt-3" style="border: 2px dashed #7a7c7d;">
                <p class="m-0 p-2 text-center">
                    <span><x-lucide-list-todo style="height: 18px; width: 18px;" /></span>
                    New Task
                </p>   
            </ul>
        </div>
    </div>
</div>