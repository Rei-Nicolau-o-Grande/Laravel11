@extends('admin.layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
    <h1>Usuarios</h1>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>

    <a href="{{ route('users.create') }}">Criar novo usuario</a>

    <x-alert/>

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
                    <a href="{{ route('users.edit', $user->id ) }}">Editar</a>
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