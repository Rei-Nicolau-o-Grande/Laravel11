<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title')</title>
</head>
<body>
    <header>
        header Default
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        footer Default
    </footer>
</body>
</html>