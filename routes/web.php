<?php

use App\Http\Controllers\BlogController;
use App\Http\Middleware\UserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

    Route::get('/blogs/create', function () {
        return view('blogs.create');
    })->name('blogs.create');

    Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.create');

    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit')->middleware(UserIsAdmin::class);
});
