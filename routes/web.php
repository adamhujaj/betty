<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*route untuk halaman register*/
Route::get('/register', function () {
    return view('register');
});

/*route untuk halaman register-split*/
Route::get('/register-split', function () {
    return view('register-split');
});

/*route untuk halaman register-succes*/
Route::get('/register-succes', function () {
    return view('register-succes');
});

/*route untuk halaman login*/
Route::get('/login', function () {
    return view('login-split');
});

/*route untuk halaman login-succes*/
Route::get('/login-succes', function () {
    return view('login-succes');
});
