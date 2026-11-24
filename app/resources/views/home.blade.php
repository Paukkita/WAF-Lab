@extends('layout')
@section('content')

    <section class="mb-12 text-center">
        <span class="rounded-full border border-indigo-500/30 bg-indigo-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-indigo-300">
            Laboratorio de seguridad
        </span>
        <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
            Protegiendo una app con
            <span class="bg-gradient-to-r from-indigo-400 to-cyan-400 bg-clip-text text-transparent">ModSecurity + OWASP CRS</span>
        </h1>
        <p class="mx-auto mt-4 max-w-2xl text-slate-400">
            Esta aplicación es el objetivo. Tiene tres endpoints débiles para comprobar cómo un WAF detecta y bloquea ataques web.
        </p>
    </section>

    <section class="grid gap-5 md:grid-cols-3">
        <a href="/search" class="group rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:-translate-y-1 hover:border-rose-500/50">
            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-rose-500/10 text-xl">🔍</div>
            <h3 class="font-semibold text-white">Buscador</h3>
            <p class="mt-2 text-sm text-slate-400">Consulta SQL construida con texto del usuario.</p>
            <span class="mt-4 inline-block rounded-md bg-rose-500/10 px-2 py-1 text-xs font-medium text-rose-300">SQL Injection</span>
            <code class="mt-3 block text-xs text-slate-500">/search?q=</code>
        </a>

        <a href="/comments" class="group rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:-translate-y-1 hover:border-amber-500/50">
            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500/10 text-xl">💬</div>
            <h3 class="font-semibold text-white">Comentarios</h3>
            <p class="mt-2 text-sm text-slate-400">Se muestran sin escapar el HTML.</p>
            <span class="mt-4 inline-block rounded-md bg-amber-500/10 px-2 py-1 text-xs font-medium text-amber-300">XSS almacenado</span>
            <code class="mt-3 block text-xs text-slate-500">/comments</code>
        </a>

        <a href="/file?name=about.txt" class="group rounded-2xl border border-slate-800 bg-slate-900 p-6 transition hover:-translate-y-1 hover:border-cyan-500/50">
            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-500/10 text-xl">📁</div>
            <h3 class="font-semibold text-white">Visor de archivos</h3>
            <p class="mt-2 text-sm text-slate-400">Lee archivos sin validar la ruta.</p>
            <span class="mt-4 inline-block rounded-md bg-cyan-500/10 px-2 py-1 text-xs font-medium text-cyan-300">Path Traversal</span>
            <code class="mt-3 block text-xs text-slate-500">/file?name=</code>
        </a>
    </section>

    <section class="mt-12 rounded-2xl border border-slate-800 bg-slate-900 p-6">
        <h2 class="mb-4 text-sm font-semibold uppercase tracking-wider text-slate-400">Arquitectura</h2>
        <div class="flex flex-wrap items-center justify-center gap-3 text-sm font-medium">
            <span class="rounded-lg bg-slate-800 px-4 py-2">Kali Linux</span>
            <span class="text-slate-600">→</span>
            <span class="rounded-lg bg-indigo-500/20 px-4 py-2 text-indigo-300">Nginx + WAF</span>
            <span class="text-slate-600">→</span>
            <span class="rounded-lg bg-slate-800 px-4 py-2">Laravel</span>
            <span class="text-slate-600">→</span>
            <span class="rounded-lg bg-slate-800 px-4 py-2">MySQL</span>
        </div>
    </section>

@endsection