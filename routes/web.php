<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UangMasukController;
use App\Http\Controllers\UangKeluarController;


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
    Route::get('/dasboard', function () {
        return view('dasboard.index',[
            "title" => "Dasboard"
        ]);
    });
});

Route::get('/', function() {
    return view('home' , [
        "title" => "home"
    ]);
});

// Untuk Uang Masuk
Route::get('/uang-masuk', [UangMasukController::class, 'index'])->name('uang-masuk')->middleware('auth');
Route::get('/getUangMasuk', [UangMasukController::class, 'insertUangMasuk']);
Route::post('/insertUangMasuk', [UangMasukController::class, 'store'])->name('store.uangmasuk');

Route::resource('uangmasuk', UangMasukController::class)->middleware('auth');
Route::delete('uangmasuks/{id}', [UangMasukController::class, 'destroy'])->name('uangmasuks.destroy')->middleware('auth');
Route::get('uangmasuk/details/{id}',[UangMasukController::class, 'show'])->name('uangmasukdetail.show')->middleware('auth');


// untuk uang keluar
Route::get('/uang-keluar', [UangKeluarController::class, 'index'])->name('uang-keluar')->middleware('auth');
Route::get('/postUangKeluar', [UangKeluarController::class, 'insertUangKeluar']);
Route::post('/insertUangKeluar', [UangKeluarController::class, 'store'])->name('store.uangkeluar');

Route::get('uangkeluar/details/{id}', [UangKeluarController::class, 'show'])->name('uangkeluar.show')->middleware('auth');
Route::get('/edit/{id}', [UangKeluarController::class, 'edit'])->name('uangkeluar.edit')->middleware('auth');
Route::put('/edit/{id}', [UangKeluarController::class, 'update'])->name('update.uangkeluar');
Route::delete('delete/{id}', [UangKeluarController::class, 'destroy'])->name('uangkeluar.hapus')->middleware('auth');

// LOGIN
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
