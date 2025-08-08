@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
{{-- <h1 class="text-center py-4">Projects Board</h1> --}}

    @include('layouts.search-bar')

    <div class="d-flex flex-row flex-wrap gap-3 mt-4 justify-content-center align-items-center mb-5">

        {{-- Cards criados pelo usuario --}}
        @foreach($projects as $project)
            @include('layouts.project-card',[
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