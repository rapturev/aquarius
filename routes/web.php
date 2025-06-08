<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;

// Home Screen
Route::view('/', 'home')->name('home');

// Board contains threads group
Route::get('/{board}', [ThreadController::class, 'index'])->name('thread.index');
Route::get('/{board}/res/{thread}', [ThreadController::class, 'show'])->name('thread.show');
Route::get('/{board}/res/create', [ThreadController::class, 'create'])->name('thread.create');
Route::post('/{board}/res/store',[ThreadController::class, 'store'])->name('thread.store');

// Thread contains posts group
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/{board}/res/{thread}/post/store', [PostController::class, 'store'])->name('post.store');
