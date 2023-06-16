<?php

namespace App\Http\Controllers;

use App\Models\UangMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UangMasuk::all();
        return view(
            'show.uang-masuk',
            [
                "title" => "Uang Masuk",
                "data" => $data
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertUangMasuk()
    {
        return view(
            'tambah.tambah-uang-masuk',
            [
                "title" => "Tambah Uang Masuk"
            ]
        );
    }

    public function store(Request $request)
    {
        UangMasuk::create([
            'users_id' => Auth::user()->id,
            'nama_masuk' => $request->nama_masuk,
            'deskripsi' => $request->deskripsi,
            'tanggal_masuk' => $request->tanggal_masuk,
            'harga_masuk' => $request->harga_masuk,
        ]);
        return redirect()->route('uang-masuk');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = UangMasuk::findOrFail($id);
        return view('detail.uang-masuk',
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
        $data = UangMasuk::findOrFail($id);
        return view(
            'edit.main-masuk',
            [
                "title" => "Edit Uang Masuk",
                "data" => $data
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        UangMasuk::find($id)->update([
            'nama_masuk' => $request->nama_masuk,
            'deskripsi' => $request->deskripsi,
            'tanggal_masuk' => $request->tanggal_masuk,
            'harga_masuk' => $request->harga_masuk
        ]);
        return redirect()->route('uang-masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        UangMasuk::destroy($request->id);
        return redirect('uang-masuk')->with('Success', 'Uang Masuk been Deleted!');
    }
}
