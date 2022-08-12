<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
})->name('login')->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('adminorsuper');
//Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
//Autentikasi Login
Route::post('/login', [LoginController::class, 'auth']);
//Untuk Logout
Route::post('/logout', [LoginController::class, 'logout']);
