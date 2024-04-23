<x-alert/>
@csrf()
<div class="col-auto">
    <label class="form-label" for="name">Nome</label>
    <input class="form-control @error('name') is-invalid @enderror" type="text"
        name="name" placeholder="Nome" id="name" value="{{ $user->name ?? old('name') }}">
    @error('name')
        <div class="invalid-feedback">
            <span>{{ $message }}.</span>
        </div>
    @enderror

    <label class="form-label" for="email">Email</label>
    <input class="form-control @error('email') is-invalid @enderror" type="email"
        id="email" name="email" placeholder="Email" value="{{ $user->email ?? old('email') }}">
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