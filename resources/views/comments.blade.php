@extends('layouts.app')

@section('title', 'Comentários Aprovados')

@section('content')
<div class="container mt-4">
    <h2>Comentários</h2>

    <h3>Comentários Aprovados</h3>
    @if($comments->isEmpty())
        <p>Não há comentários aprovados ainda.</p>
    @else
        @foreach($comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach
    @endif
    <a href="{{ route('index') }}" class="btn btn-secondary mt-3">Clique aqui para retornar à página inicial</a>
</div>
@endsection
