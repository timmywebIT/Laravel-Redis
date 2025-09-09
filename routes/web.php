<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("posts", [PostController::class, 'index'])->name("index");
Route::get("posts/{id}", [PostController::class, 'show'])->name("show");

