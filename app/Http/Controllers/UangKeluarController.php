<?php

namespace App\Http\Controllers;

use App\Models\UangKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = UangKeluar::query();

            return datatables()->of($query)
                ->addIndexColumn()
                ->editColumn('action', function ($item) {
                    return '
                    <div class="d-flex">
                        <a href="' . route('uangkeluar.show', $item->id) . '" class="btn btn-info btn-sm mb-3 mx-1">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="' . route('uangkeluar.edit', $item->id) . '" class="btn btn-warning btn-sm mb-3 mx-1">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <button class="btn btn-danger btn-sm mb-3 mx-1" onclick="btnDeleteUangKeluar(' . $item->id . ')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.uang-keluar.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertUangKeluar()
    {
        //
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
        return redirect()->route('uangkeluar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = UangKeluar::findOrFail($id);
        if (request()->ajax()) {
            $query = UangKeluar::query();

            return datatables()->of($query)
                ->addIndexColumn()
                ->editColumn('action', function ($item) {
                    return '
                    <div class="d-flex">
                        <button class="btn btn-warning btn-sm mb-3 mx-1" onClick="btnUpdateUangKeluar(' . $item->id . ')">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mb-3 mx-1" onclick="btnDeleteUangKeluar(' . $item->id . ')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.uang-keluar.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = UangKeluar::findOrFail($id);
        return view('pages.uang-keluar.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        UangKeluar::find($id)->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'metode_pembayaran' => $request->metode_pembayaran
        ]);
        return redirect()->route('uangkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $item = UangKeluar::findOrFail($request->id);
        $item->delete();
        if ($item) {
            Alert::success('Berhasil', 'Data berhasil dihapus');
            return redirect()->route('uangkeluar.index');
        } else {
            Alert::error('Gagal', 'Data gagal dihapus');
            return redirect()->route('uangkeluar.index');
        }
    }
}
