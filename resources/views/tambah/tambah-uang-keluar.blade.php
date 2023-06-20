@extends('pages.dashboard')

@section('title', 'Tambah')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Tambah Uang Keluar</h3>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('store.uangkeluar') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input type="text" name="nama_barang" class="form-control"
                                                    id="nama_barang" placeholder="Enter Nama Barang">
                                            </div>
                                            <div class="mb-3">
                                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori :
                                                </label>
                                                <select class="custom-select my-1 mr-sm-2 form-select" id="kategori_id"
                                                    name="kategori_id">
                                                    <option selected>Choose...</option>
                                                    <option value="1">Belanja Umum</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Metode</label>
                                                <input type="text" name="metode_pembayaran" class="form-control"
                                                    id="metode_pembayaran" placeholder="Enter Nama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1">Tanggal</label>
                                                <input type="date" name="tanggal_pembelian" class="form-control"
                                                    id="tanggal_pembelian" placeholder="Enter Tanggal">
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
                </div>
            </div>
        </div>
    </section>
@endsection