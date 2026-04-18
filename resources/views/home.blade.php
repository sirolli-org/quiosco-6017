<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <img src="/yaq-logo.svg" alt="Logo de YAQ">
    <h1>Bienvenido a la página de inicio</h1>
    <nav>
        <ul>
            <li>Inicio</li>
            @auth
                <li><a href="/welcome">Ir a welcome</a></li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Cerrar sesión</button>
                    </form>
                </li>
            @else
                <li><a href="/login">Iniciar sesión</a></li>
                <li><a href="/register">Registrarse</a></li>
            @endauth
        </ul>
    </nav>
</body>
</html>