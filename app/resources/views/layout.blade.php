<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAF Lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-slate-200 antialiased">

    <header class="sticky top-0 z-10 border-b border-slate-800 bg-slate-900/80 backdrop-blur">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
            <a href="/" class="flex items-center gap-2 text-lg font-bold text-white">
                <span class="text-2xl">🛡️</span> WAF Lab
            </a>
            <nav class="flex gap-1 text-sm font-medium">
                <a href="/" class="rounded-lg px-3 py-2 transition hover:bg-slate-800 hover:text-white {{ request()->is('/') ? 'bg-slate-800 text-white' : 'text-slate-400' }}">Inicio</a>
                <a href="/search" class="rounded-lg px-3 py-2 transition hover:bg-slate-800 hover:text-white {{ request()->is('search') ? 'bg-slate-800 text-white' : 'text-slate-400' }}">Buscar</a>
                <a href="/comments" class="rounded-lg px-3 py-2 transition hover:bg-slate-800 hover:text-white {{ request()->is('comments') ? 'bg-slate-800 text-white' : 'text-slate-400' }}">Comentarios</a>
                <a href="/file?name=about.txt" class="rounded-lg px-3 py-2 text-slate-400 transition hover:bg-slate-800 hover:text-white">Archivo</a>
            </nav>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-10">
        @yield('content')
    </main>

    <footer class="mx-auto max-w-5xl px-6 pb-10">
        <div class="rounded-xl border border-amber-500/30 bg-amber-500/10 px-4 py-3 text-sm text-amber-300">
            ⚠️ Aplicación vulnerable <strong>a propósito</strong>. Solo para uso en laboratorio; no exponer a Internet.
        </div>
    </footer>

</body>
</html>