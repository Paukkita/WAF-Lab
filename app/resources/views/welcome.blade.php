<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>WAF Lab</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 800px; margin: 2rem auto; padding: 0 1rem; color: #222; }
        nav a { margin-right: 1rem; }
        input, textarea { width: 100%; padding: .5rem; margin: .3rem 0 1rem; box-sizing: border-box; }
        button { padding: .5rem 1rem; }
        .card { border: 1px solid #ddd; border-radius: 6px; padding: .8rem; margin-bottom: .8rem; }
    </style>
</head>
<body>
    <h1>WAF Lab</h1>
    <nav>
        <a href="/">Inicio</a>
        <a href="/search">Buscar</a>
        <a href="/comments">Comentarios</a>
        <a href="/file?name=about.txt">Archivo</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>