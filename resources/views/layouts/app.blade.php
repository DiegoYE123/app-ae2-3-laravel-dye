<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de libros</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        header { background: #2c3e50; color: white; padding: 15px 30px; }
        main { padding: 30px; }
        footer { background: #ecf0f1; text-align: center; padding: 10px; }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo de libros</h1>
    </header>
 
    <main>
        @yield('content')
    </main>
 
    <footer>
        <p>Actividad Laravel - Campus FP</p>
    </footer>
</body>
</html>
