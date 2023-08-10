<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminDashboardController;


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
    return view('welcome');
});

Route::get('/profile', function(){
    return view('Users.userprofile');
});

Route::get('/register', [UsersController::class, 'showRegistrationForm'])->name('registerForm');
Route::post('/register', [UsersController::class, 'register']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/home', [AdminDashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);



