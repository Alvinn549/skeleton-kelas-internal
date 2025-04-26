<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::view('/about', 'landing.pages.about.index');
Route::view('/landing/posts/show', 'landing.pages.posts.show');

Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');

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
