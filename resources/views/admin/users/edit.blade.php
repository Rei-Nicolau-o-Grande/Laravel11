@extends('admin.layouts.app')

@section('title', 'Editando usuário')

@section('content')
    <h1>Editando Usuario</h1>

    <x-alert/>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf()
        @method('PUT')

        <input type="text" name="id" value="{{ $user->id }}" disabled>
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection