<?php

use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/{board}', [ThreadController::class, 'index'])->name('thread.index');
Route::get('/{board}/res/{thread}', [ThreadController::class, 'show'])->name('thread.show');
Route::get('/{board}/res/create', [ThreadController::class, 'create'])->name('thread.create');

Route::post('/{board}/res/store',[ThreadController::class, 'store'])->name('thread.store');
