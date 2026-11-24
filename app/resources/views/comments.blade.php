@extends('layout')
@section('content')

    <h1 class="text-3xl font-bold text-white">Comentarios</h1>
    <p class="mt-1 text-slate-400">Se renderizan sin escapar: vulnerable a XSS almacenado.</p>

    <form method="POST" action="/comments" class="mt-6 space-y-4 rounded-2xl border border-slate-800 bg-slate-900 p-6">
        <input type="text" name="author" placeholder="Nombre" required
               class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30">
        <textarea name="body" rows="3" placeholder="Escribe un comentario..." required
                  class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/30"></textarea>
        <button type="submit"
                class="rounded-xl bg-indigo-600 px-6 py-3 font-semibold text-white transition hover:bg-indigo-500">
            Enviar comentario
        </button>
    </form>

    <div class="mt-8 space-y-4">
        @forelse ($comments as $c)
            <article class="flex gap-4 rounded-2xl border border-slate-800 bg-slate-900 p-5">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-cyan-500 font-bold text-white">
                    {{ mb_strtoupper(mb_substr(strip_tags($c->author), 0, 1)) }}
                </div>
                <div class="min-w-0">
                    {{-- {!! !!} no escapa el HTML: XSS almacenado intencionado --}}
                    <p class="font-semibold text-white">{!! $c->author !!}</p>
                    <p class="mt-1 text-slate-300">{!! $c->body !!}</p>
                    <p class="mt-2 text-xs text-slate-500">{{ $c->created_at->diffForHumans() }}</p>
                </div>
            </article>
        @empty
            <div class="rounded-xl border border-dashed border-slate-700 p-8 text-center text-slate-500">
                Todavía no hay comentarios.
            </div>
        @endforelse
    </div>

@endsection