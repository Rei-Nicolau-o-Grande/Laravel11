@extends('admin.layouts.app')

@section('title', 'Criar novo usuário')

@section('content')
    <h1>Criando Novo Usuario</h1>

    <x-alert/>

    <div class="row">
        <div class="d-flex justify-content-center">
            <form class="" action="{{ route('users.store') }}" method="POST">
                @csrf()
                <div class="col-auto">
                    <label class="form-label" for="name">Nome</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                        name="name" placeholder="Nome" id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            <span>{{ $message }}.</span>
                        </div>
                    @enderror

                    <label class="form-label" for="email">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                        id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            <span>{{ $message }}.</span>
                        </div>
                    @enderror

                    <label class="form-label" for="password">Senha</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                        name="password" placeholder="Senha" id="password" value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">
                            <span>{{ $message }}.</span>
                        </div>
                    @enderror

                    <button class="btn btn-success mt-3 mb-5" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
