<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::middleware('auth')->group(function () {
    Route::resource('books', BookController::class);
});