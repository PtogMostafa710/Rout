<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, "index"]);

Route::get('/about', [AboutController::class, "about"]);

Route::get('/contact', [ContactController::class, "contact"]);
Route::post('/send-message', [ContactController::class, "sendMessage"]);

Route::get('/posts', [PostsController::class, "posts"]);
