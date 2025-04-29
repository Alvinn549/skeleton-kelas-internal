<?php

use App\Http\Controllers\AuthController;
use App\Livewire\About;
use App\Livewire\Blog;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'auth.login')
    ->middleware('guest');

Route::view('/register', 'auth.register');

Route::post('/do-login', [AuthController::class, 'authenticate'])
    ->middleware('guest')
    ->name('do-login');

Route::post('/do-logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('do-logout');

Route::get('/', Blog::class);

Route::get('/about',  About::class);

Route::view('/landing/posts/show', 'landing.pages.posts.show');

Route::middleware('auth')->group(function () {

    Route::view('/dashboard', 'dashboard');

    Route::view('/dashboard', 'dashboard');

    Route::view('/kategoris', 'dashboard.pages.kategoris.index');
    Route::view('/kategoris/create', 'dashboard.pages.kategoris.create');

    Route::view('/posts', 'dashboard.pages.posts.index');
    Route::view('/posts/create', 'dashboard.pages.posts.create');
    Route::view('/posts/edit', 'dashboard.pages.posts.edit');
    Route::view('/posts/show', 'dashboard.pages.posts.show');

    Route::view('/users', 'dashboard.pages.users.index');
    Route::view('/users/create', 'dashboard.pages.users.create');
    Route::view('/users/edit', 'dashboard.pages.users.edit');
    Route::view('/users/show', 'dashboard.pages.users.show');
});
