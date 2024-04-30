@extends('admin.layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
    <h1>Usuario {{ $user->name }}</h1>

    <x-alert/>

    <ul>
        <li><strong>{{ $user->name }}</strong></li>
        <li><strong>{{ $user->email }}</strong></li>
        <li><strong>{{ $user->created_at }}</strong></li>
        <li><strong>{{ $user->updated_at }}</strong></li>
    </ul>

    @can('owner', $user)
        <h1>Pode deletar</h1>
    @endcan

    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Deletar o usuário: {{ $user->name }}</button>
    </form>
    @endcan

@endsection