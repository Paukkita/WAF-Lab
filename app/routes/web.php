<?php

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));

// Buscador (VULNERABLE A SQLi a proposito)
Route::get('/search', function (Request $request) {
    $q = $request->query('q', '');
    $results = DB::select("SELECT * FROM comments WHERE body LIKE '%$q%'");
    return view('search', ['results' => $results, 'q' => $q]);
});

// Comentarios (XSS almacenado a proposito)
Route::get('/comments', function () {
    return view('comments', ['comments' => Comment::latest()->get()]);
});

Route::post('/comments', function (Request $request) {
    Comment::create($request->only('author', 'body'));
    return redirect('/comments');
})->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class]);

// Visor de archivos (VULNERABLE A Path Traversal a proposito)
Route::get('/file', function (Request $request) {
    $name = $request->query('name', 'about.txt');
    $path = storage_path('docs/' . $name);
    if (!file_exists($path)) {
        abort(404, 'Archivo no encontrado');
    }
    return response(file_get_contents($path), 200)->header('Content-Type', 'text/plain');
});