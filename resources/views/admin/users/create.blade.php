<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Criando Novo Usuario</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        <input type="text" name="name" placeholder="Nome">
        <input type="password" name="password" placeholder="Senha">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>