<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeternakController;

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

//Route menuju halaman index
Route::get('/', function () {
    return view('shoppinghome');
});

Route::get('/register', [UsersController::class, 'showRegistrationForm'])->name('registerForm');
Route::post('/register', [UsersController::class, 'register']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/home', [PeternakController::class, 'index'])->name('peternak');
Route::get('/admin-home', [AdminController::class, 'index'])->name('admin')->middleware('is_admin');

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/profile', function(){
    return view('Users.userprofile');
});



Route::get("/kelolainvest",function (){
    return view('mykelolainvestasi');
});
Route::get("/kelolapeternak",function (){
    return view('mykelolapeternak');
});
Route::get("/kelolaadmin",function (){
    return view('mykelolaadmin');
});
Route::get("/detailkelolapeternak",function (){
    return view('mydetailkelolapeternak');
});
Route::get("/detailkelolainvestasi",function (){
    return view('mydetailkelolainvestasi');
});
Route::get("/dashboard",function (){
    return view('mydashboard');
});