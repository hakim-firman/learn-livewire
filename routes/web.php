<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::post('/logout', LogoutController::class)->name('logout');
Route::get('/login', \App\Livewire\Login::class)->name('login')->middleware('guest');
Route::middleware('auth')->group(function () {
    Route::get('/', \App\Livewire\Home::class)->name('home');
    Route::get('/about', \App\Livewire\About::class)->name('about');
    Route::get('/posts', \App\Livewire\Posts\Index::class)->name('posts.index');

    Route::get('users/{user}', \App\Livewire\Users\Show::class)->name('users.show');

});
