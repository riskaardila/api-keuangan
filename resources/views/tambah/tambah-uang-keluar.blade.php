@extends('dasboard.layouts.main')

@section('container')
    <div class="container mb-4">
        <h1 class="text-center mb-4">Tambah Uang keluar</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store.uangkeluar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                    placeholder="Enter Nama Barang">
                            </div>
                            <div class="mb-3">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori : </label>
                                <select class="custom-select my-1 mr-sm-2 form-select" id="kategori_id" name="kategori_id">
                                    <option selected>Choose...</option>
                                    <option value="1">Belanja Umum</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Metode</label>
                                <input type="text" name="metode_pembayaran" class="form-control" id="metode_pembayaran"
                                    placeholder="Enter Nama">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1">Tanggal</label>
                                <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal_pembelian"
                                    placeholder="Enter Tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="number" name="harga" class="form-control" id="harga"
                                    placeholder="Enter harga">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
