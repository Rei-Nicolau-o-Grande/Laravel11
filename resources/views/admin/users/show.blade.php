@extends('admin.layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Usuario {{ $user->name }}</h1>

    <x-alert/>

    <ul>
        <li><strong>{{ $user->name }}</strong></li>
        <li><strong>{{ $user->email }}</strong></li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Deletar o usuário: {{ $user->name }}</button>
    </form>
@endsection