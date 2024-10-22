<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\DashboardNQController;


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
