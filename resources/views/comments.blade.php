<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários Aprovados</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Comentários</h2>

        <h3>Comentários Aprovados</h3>
        @if($comments->isEmpty())
            <p>Não há comentários aprovados ainda.</p>
        @else
            @foreach($comments as $comment)
                <div class="comment">
                    <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->comment }}</p>
                </div>
            @endforeach
        @endif
    </div>
    <a href="{{ route('index') }}">Clique aqui para retornar a página!</a>
</body>
</html>
