@extends('layouts.app')

@section('title', 'Painel Administrativo - Comentários')

@section('content')
<div class="container mt-4">
    <h2>Comentários Pendentes</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulário de Importação -->
    <form action="{{ route('admin.comments.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
        @csrf
        <div class="form-group">
            <label for="file">Importar Comentários (JSON):</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Importar</button>
    </form>

    <!-- Botão de Exportação -->
    <form action="{{ route('admin.comments.export') }}" method="GET">
        <button type="submit" class="btn btn-secondary mb-3">Exportar Comentários (JSON)</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Comentário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user->name }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.comments.update', $comment->id) }}" class="d-inline">
                            @csrf
                            <input type="hidden" name="status" value="approved">
                            <button type="submit" class="btn btn-success">Aprovar</button>
                        </form>
                        <form method="POST" action="{{ route('admin.comments.update', $comment->id) }}" class="d-inline">
                            @csrf
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" class="btn btn-danger">Reprovar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Clique aqui para retornar à página inicial</a>
</div>
@endsection
