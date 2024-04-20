@extends('admin.layouts.app')

@section('title', 'Editando usuário')

@section('content')
    <h1>Editando Usuario</h1>

    <x-alert />

    <div class="col-6">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf()
            @method('PUT')

            <div class="col-auto">
                <label class="form-label" for="name">Nome</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text"
                    name="name" placeholder="Nome" id="name" value="{{ $user->name }}">
                @error('name')
                    <div class="invalid-feedback">
                        <span>{{ $message }}.</span>
                    </div>
                @enderror

                <label class="form-label" for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email"
                    id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                @error('email')
                    <div class="invalid-feedback">
                        <span>{{ $message }}.</span>
                    </div>
                @enderror

                <label class="form-label" for="password">Senha</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password"
                    name="password" placeholder="Senha" id="password">
                @error('password')
                    <div class="invalid-feedback">
                        <span>{{ $message }}.</span>
                    </div>
                @enderror

                <button class="btn btn-success mt-3 mb-5" type="submit">Enviar</button>
            </div>
        </form>
    </div>

@endsection