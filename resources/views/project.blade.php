@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
    {{-- <h1 class="text-center py-4">Projects Board</h1> --}}

    @include('layouts.search-bar')

    <div class="d-flex flex-row flex-wrap gap-3 justify-content-center align-items-center mb-5">

        {{-- Cards criados pelo usuario --}}
        @foreach($projects as $project)
            @include('layouts.project-card', [
                'title' => $project->title,
                'description' => $project->description,
                'card_id' => $project->id
            ])
        @endforeach
    {{-- Card para criar um novo projeto --}}
    @include('layouts.project-new-card')
    </div>

    {{-- Modal form novo projeto --}}
        @include('layouts.project-form')

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

@section('scripts')
    @include('layouts.script-ajax')
@endsection
        
            @if(session('success'))
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast-success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header gap-1">
                        <x-lucide-bookmark-check class="text-success" style="height: 18px; width: 18px;" />
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
            
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast-success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header gap-1">
        <x-lucide-bookmark-check class="text-success" style="height: 18px; width: 18px;" />
        <strong class="me-auto">{{ session('user_name') }}</strong>
            <small>Now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
<div class="toast-body">
New task created successfully.
</div>
</div>
</div>