<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\DashboardNQController;
use App\Http\Controllers\GoogleAuthController;
use Laravel\Socialite\Facades\Socialite;


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

// Route::get('/', function () {
    //     return view('welcome');
    // });
    
// Route::get('/home', [HomeController::class, 'index']);

Route::get('/', [DashboardNQController::class, 'user'])->name('user');
Route::get('/login', [DashboardNQController::class, 'login'])->name('login');
Route::get('/user', [DashboardNQController::class, 'user'])->name('user');
Route::get('/paket', [DashboardNQController::class, 'paket'])->name('paket');
Route::get('/produk', [DashboardNQController::class, 'produk'])->name('produk');
Route::get('/artikel', [DashboardNQController::class, 'artikel'])->name('artikel');
Route::get('/voucher', [DashboardNQController::class, 'voucher'])->name('voucher');
Route::get('/artikelCreate', [DashboardNQController::class, 'artikelCreate'])->name('artikelCreate');
Route::get('/ckEditorUpload', [DashboardNQController::class, 'ckEditorUpload'])->name('ckEditorUpload');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
