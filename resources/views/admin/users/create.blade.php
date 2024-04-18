@extends('admin.layouts.app')

@section('title', 'Criar novo usuário')

@section('content')
    <h1>Criando Novo Usuario</h1>

    <x-alert/>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}">
        <button type="submit">Enviar</button>
    </form>
@endsection
