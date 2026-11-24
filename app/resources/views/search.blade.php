@extends('layout')
@section('content')

    <h1 class="text-3xl font-bold text-white">Buscar comentarios</h1>
    <p class="mt-1 text-slate-400">Endpoint vulnerable a SQL Injection.</p>

    <form method="GET" action="/search" class="mt-6 flex gap-3">
        <input type="text" name="q" value="{{ $q }}" placeholder="Buscar en los comentarios..."
               class="w-full rounded-xl border border-slate-700 bg-slate-900 px-4 py-3 text-slate-100 placeholder-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30">
        <button type="submit"
                class="rounded-xl bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-500">
            Buscar
        </button>
    </form>

    <p class="mt-6 text-sm text-slate-500">{{ count($results) }} resultado(s)</p>

    <div class="mt-3 space-y-3">
        @forelse ($results as $r)
            <div class="rounded-xl border border-slate-800 bg-slate-900 p-4">
                <p class="font-semibold text-white">{{ $r->author }}</p>
                <p class="mt-1 text-slate-400">{{ $r->body }}</p>
            </div>
        @empty
            <div class="rounded-xl border border-dashed border-slate-700 p-8 text-center text-slate-500">
                No hay resultados.
            </div>
        @endforelse
    </div>

@endsection