<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <img src="{{ asset('yaq-logo.svg') }}" alt="Logo de YAQ">
    <h1>Ruta protegida</h1>
    <p>Bienvenido, {{ auth()->user()->name ?? 'Guest' }}.</p>

    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li>Welcome</li>
        </ul>
    </nav>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
