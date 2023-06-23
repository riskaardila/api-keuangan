@extends('layouts.app')

@section('title', 'Detail Uang Keluar')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Detail Uang Keluar</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" name="nama_barang" id="nama_barang" class="form-control"
                                            placeholder="Nama Pengeluaran" value="{{ $data->nama_barang }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12 mb-3">
                                    <label for="metode_pembayaran">Metode Pembayaran</label>
                                        <input type="text" name="metode_pembayaran" id="metode_pembayaran" class="form-control"
                                            placeholder="Metode Pembayaran" value="{{ $data->metode_pembayaran }}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="tanggal_pembelian">Tanggal</label>
                                        <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" value="{{ $data->tanggal_pembelian }}" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-3">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga"
                                        placeholder="hargaa..." value="{{ $data->harga }}" readonly>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('uangkeluar.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
