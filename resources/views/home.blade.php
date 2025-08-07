@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
    <div class="d-flex flex-row flex-wrap gap-3 mt-4 justify-content-center align-items-center">
        @for ($i = 1; $i <= 2; $i++)
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
                        <p class="card-text">Sistema de gestão de clientes com integração de tarefas e equipe.</p>
                    </div>

                    <div class="d-flex justify-content-around mt-3">
                        <a href="" class="btn btn-sm btn-outline-primary px-3">
                            <i class="bi bi-list-task me-1"></i> Tarefas
                        </a>
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-success px-3">
                                <i class="bi bi-check2-circle me-1"></i> Concluir
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card-footer text-muted text-end">
                    <small>Atualizado há 3 min</small>
                </div>
            </div>

        @endfor
        <div class="card border-dashed text-center shadow-sm" style="width: 18rem; border: 2px dashed #7a7c7d;">
            <div class="card-body d-flex flex-column justify-content-center align-items-center py-5">
                <i class="bi bi-plus-circle fs-1 text-primary mb-3"></i>
                <h5 class="card-title mb-2">Adicionar Projeto</h5>
                <p class="card-text text-muted">Crie um novo projeto para começar a organizar suas tarefas.</p>
                <a href="" class="btn btn-outline-primary mt-2">
                    <strong>+ Criar Projeto</strong>
                </a>
            </div>
        </div>
    </div>
@endsection