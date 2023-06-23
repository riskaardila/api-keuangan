<?php

namespace App\Http\Controllers;

use App\Models\UangMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = UangMasuk::query();

            return datatables()->of($query)
                ->addIndexColumn()
                ->editColumn('action', function ($item) {
                    return '
                    <div class="d-flex">
                        <a href="' . route('uangmasuk.show', $item->id) . '" class="btn btn-info btn-sm mb-3 mx-1">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="' . route('uangmasuk.edit', $item->id) . '" class="btn btn-warning btn-sm mb-3 mx-1">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <button class="btn btn-danger btn-sm mb-3 mx-1" onclick="btnDeleteUangMasuk(' . $item->id . ')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.uang-masuk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertUangMasuk()
    {
        //
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
        if (request()->ajax()) {
            $query = UangMasuk::query();

            return datatables()->of($query)
                ->addIndexColumn()
                ->editColumn('action', function ($item) {
                    return '
                    <div class="d-flex">
                        <button class="btn btn-warning btn-sm mb-3 mx-1" onClick="btnUpdateUangMasuk(' . $item->id . ')">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn btn-danger btn-sm mb-3 mx-1" onclick="btnDeleteUangMasuk(' . $item->id . ')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.uang-masuk.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = UangMasuk::findOrFail($id);
        return view(
            'pages.uang-masuk.edit',
            compact('data')
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
        $item = UangMasuk::findOrFail($request->id);
        $item->delete();
        if ($item) {
            Alert::success('Berhasil', 'Data berhasil dihapus');
            return redirect()->route('uangmasuk.index');
        } else {
            Alert::error('Gagal', 'Data gagal dihapus');
            return redirect()->route('uangmasuk.index');
        }
    }
}
