<?php

namespace App\Http\Controllers;

use App\Models\UangKeluar;
use App\Models\UangMasuk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $getUangMasuk = UangMasuk::count();
        $getUangKeluar = UangKeluar::count();
        $getPengguna = User::count();
        return view('pages.dashboard', compact('getUangMasuk', 'getUangKeluar', 'getPengguna'));
    }
}
