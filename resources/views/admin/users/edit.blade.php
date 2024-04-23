@extends('admin.layouts.app')

@section('title', 'Editando usuário')

@section('content')
    <h1>Editando Usuario</h1>

    <x-alert />

    <div class="col-6">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PUT')
            @include('admin.users.partials.form')
        </form>
    </div>

@endsection