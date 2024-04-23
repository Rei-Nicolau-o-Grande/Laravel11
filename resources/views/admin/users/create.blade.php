@extends('admin.layouts.app')

@section('title', 'Criar novo usuário')

@section('content')
    <h1>Criando Novo Usuario</h1>

    <div class="row">
        <div class="d-flex justify-content-center">
            <form class="" action="{{ route('users.store') }}" method="POST">
                @include('admin.users.partials.form')
            </form>
        </div>
    </div>
@endsection
