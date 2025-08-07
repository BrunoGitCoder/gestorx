@extends('layouts.app')

@section('title_page', 'GestorX')

@section('content')
    <div class="d-flex flex-row flex-wrap gap-3 mt-4 justify-content-center align-items-center">
        @for ($i = 1; $i <= 6; $i++)
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