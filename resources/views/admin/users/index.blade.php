@extends('admin.layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
    <h1>Usuarios</h1>

    <a href="{{ route('users.create') }}">Criar novo usuario</a>

    <x-alert/>

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Ações</td>
                <td>Data</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id ) }}">Editar</a>
                    <a href="{{ route('users.show', $user->id ) }}">Ver</a>
                </td>
                <td>{{ $user->created_at }}</td>
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

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Ativo</td>
                <td>Data</td>
                <td>Data Criação</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category )
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->is_active }}</td>
                <td>{{ $category->published_at }}</td>
                {{-- <td>{{ $category->published_at->diffForHumans() }}</td> --}}
                <td>{{ $category->created_at }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum registro encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection