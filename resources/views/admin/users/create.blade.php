@extends('admin.layouts.app')

@section('title', 'Criar novo usuário')

@section('content')
    <h1>Criando Novo Usuario</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        <input type="text" name="name" placeholder="Nome">
        <input type="password" name="password" placeholder="Senha">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Enviar</button>
    </form>
@endsection
