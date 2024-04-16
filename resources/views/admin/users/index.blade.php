@extends('admin.layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
    <h1>Usuarios</h1>

    <a href="{{ route('users.create') }}">Criar novo usuario</a>

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a>Editar</a>
                    <a>Ver</a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum registro encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-5 mb-5 pagination justify-content-center">
        {{ $users->links() }}
    </div>

@endsection