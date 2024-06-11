@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container mt-4">
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="{{ route('register') }}">Registre-se aqui</a></p>
    </div>
</div>
@endsection
