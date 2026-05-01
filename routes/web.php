<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/card', function () {
    return view('card');
});

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/user', [UserController::class, 'index']);
