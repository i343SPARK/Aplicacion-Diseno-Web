<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación de Superhéroes</title>
    <!-- Aquí puedes vincular tus hojas de estilo CSS -->
</head>
<body>
    <header>
        <h1>Aplicación de Superhéroes</h1>
        <!-- Aquí puedes añadir tu navegación si necesitas -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Aplicación de Superhéroes</p>
    </footer>

    <!-- Aquí puedes vincular tus scripts de JavaScript -->
</body>
</html>
