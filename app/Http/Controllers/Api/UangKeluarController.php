<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UangKeluarController extends Controller
{

    public function getUangKeluar(Request $request)
    {
        $uangKeluar = UangKeluar::where('users_id', Auth::user()->id)->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Uang Keluar Berhasil Diambil',
            'data' => $uangKeluar
        ], 200);
    }

    public function storeUangKeluar(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'metode_pembayaran' => 'required',
            'tanggal_pembelian' => 'required',
        ]);


        $uangKeluar = UangKeluar::create([
            'users_id' => Auth::user()->id,
            'kategori_id' => $request->kategori_id,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_pembelian' => $request->tanggal_pembelian,
        ]);

        return ResponseFormatter::success($uangKeluar, 'Data Uang Keluar Berhasil Ditambahkan');
    }
}
