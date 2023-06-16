<?php

namespace App\Http\Controllers;

use App\Models\UangKeluar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUangKeluarRequest;
use App\Models\UangMasuk;

class UangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UangKeluar::all();
        return view('show.uang-keluar', [
            "title" => "Uang Keluar",
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertUangKeluar()
    {
        return view(
            'tambah.tambah-uang-keluar',
            [
                "title" => "Tambah Uang Keluar"
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UangKeluar::create([
            'users_id' => Auth::user()->id,
            'kategori_id' => $request->kategori_id,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_pembelian' => $request->tanggal_pembelian,
        ]);
        return redirect()->route('uang-keluar');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = UangKeluar::findOrFail($id);

        return view('detail.uang-keluar', 
        [
            "title" => "Detail",
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = UangKeluar::findOrFail($id);
        return view(
            'edit.main-keluar',
            [
                "title" => "Edit Uang Keluar",
                "data" => $data
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        UangKeluar::find($id)->update([
            'nama_barang' => $request->nama_barang,
            'metode_pembayaran' => $request->metode_pembayaran,
            'harga' => $request->harga,
            'tanggal_pembelian' => $request->tanggal_pembelian
        ]);
        return redirect()->route('uang-keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        UangKeluar::destroy($request->id);
        return redirect('uang-keluar')->with('Success', 'Uang Keluar been Deleted!');
    }
}
