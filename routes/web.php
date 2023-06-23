<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UangMasukController;
use App\Http\Controllers\UangKeluarController;
use App\Http\Controllers\UsersController;

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

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::get('/', function() {
    return view('home' , [
        "title" => "home"
    ]);
});

// Untuk Uang Masuk
Route::get('/uang-masuk', [UangMasukController::class, 'index'])->name('uang-masuk')->middleware('auth');
Route::resource('uangmasuk', UangMasukController::class)->middleware('auth');
Route::post('/hapus', [UangMasukController::class, 'destroy'])->middleware('auth');


// untuk uang keluar
Route::resource('uangkeluar', UangKeluarController::class)->middleware('auth');
Route::post('/delete', [UangKeluarController::class, 'destroy'])->middleware('auth');

// USER
Route::resource('users', UsersController::class)->middleware('auth');

// LOGIN
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
