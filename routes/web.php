<?php

use Illuminate\Support\Facades\Route;

Route::get('/',\App\Livewire\Home::class);
Route::get('/about',\App\Livewire\About::class);
Route::get('/posts',\App\Livewire\Posts\Index::class);

Route::get('users/{user}',\App\Livewire\Users\Show::class)->name('users.show');

