<?php

use App\Models\products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvestNowController;
use App\Http\Controllers\KelolaUserController;

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
Route::post('/login', [LoginController::class, 'authentication'])->middleware('guest');

Route::get('/home', [PembeliController::class, 'index'])->middleware('auth')->name('pembeli');
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('is_admin')->name('admin');

Route::post('/logout', [LoginController::class, 'logout']);

//Route Shop 
Route::get('/shop', [ShopController::class, 'index']);

//Route Product
Route::get('/product', [ProductController::class, 'index']);

//Route Invest
Route::get('/invest', [InvestController::class, 'index']);

//Route Invest Now
Route::get('/invest-now', [InvestNowController::class, 'index']);

//Route Kelola peternak
Route::get('/kelolapeternak', [KelolaUserController::class, 'index_peternak']);

//Route Kelola pembeli
Route::get('/kelolapembeli', [KelolaUserController::class, 'index_pembeli']);

//Route Kelola admin
Route::get('/kelolaadmin', [KelolaUserController::class, 'index_admin']);

//Route Kelola profile
Route::get('/profile', [ProfileController::class, 'index']);

//Route Registrasi 
Route::get("/regis",function (){
    return view('myregister');
});

//Route Login baru
Route::get("/myaccountlogin",function (){
    return view('mylogin');
});

//Route Login baru
Route::get("/uprof",function (){
    return view('profile-user');
});



Route::get("/kelolainvest",function (){
    return view('mykelolainvestasi');
});

Route::get("/kelolaadmin",function (){
    return view('mykelolaadmin');
});
Route::get("/detailkelolapeternak",function (){
    return view('mydetailkelolauser');
});
Route::get("/detailkelolainvestasi",function (){
    return view('mydetailkelolainvestasi');
});
