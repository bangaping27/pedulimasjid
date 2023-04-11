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

//home
Route::get('/', function () {
    return view('welcome');
});

//tentang kami
Route::get('/tk', function () {
    return view('tk');
});

//galang dana
Route::get('/campaign/registration/info/gd', function () {
    return view('gd');
});

//donasi
Route::get('/dn', function () {
    return view('dn');
});

//kontak
Route::get('/kon', function () {
    return view('kon');
});

Route::get('/infogalangdana', function () {
    return view('tanya.index');
});