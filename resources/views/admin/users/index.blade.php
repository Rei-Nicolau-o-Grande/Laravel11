@extends('admin.layouts.app')

@section('title', 'Listagem de usuários')

@section('content')
    <h1>Usuarios</h1>

    <a href="{{ route('users.create') }}">Criar novo usuario</a>

    <x-alert />

    <div class="card mt-5">
        <h3 class="card-header p-3">Buscar Usuarios</h3>
        <div class="card-body">

            <form action="#" method="get" enctype="multipart/form-data" class="mt-2">
                @csrf

                <div id="scrollable-dropdown-menu">
                    <input class="typeahead form-control" id="search" name="search" type="text">
                </div>

                <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>

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
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                        <a href="{{ route('users.show', $user->id) }}">Ver</a>
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
            @forelse ($categories as $category)
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

    <script type="text/javascript">
        var path = "{{ route('users.search') }}";
        $('#search').typeahead({
            source: function(query, process) {
                return $.get(path, {
                    query: query
                }, function(data) {
                    return process(data);
                });
            }
        });

        $('#scrollable-dropdown-menu .typeahead').typeahead(null, {
            name: 'search',
            limit: 10,
            source: search
        });
    </script>

@endsection
