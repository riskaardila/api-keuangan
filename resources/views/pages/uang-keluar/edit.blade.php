@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Uang Keluar</h4>
                        </div>
                        <form action="{{ route('uangkeluar.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang</label>
                                            <input type="text" name="nama_barang" id="nama_barang" class="form-control"
                                                value="{{ $data->nama_barang }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" name="harga" id="harga" class="form-control"
                                                value="{{ $data->harga }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="tanggal_pembelian">Tanggal</label>
                                            <input type="date" name="tanggal_pembelian" id="tanggal_pembelian"
                                                class="form-control" value="{{ $data->tanggal_pembelian }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Metode</label>
                                            <input type="text"
                                                class="form-control @error('metode_pembayaran') is-invalid
                                            @enderror"
                                                id="metode-pembayaran" name="metode_pembayaran" required autofocus
                                                value="{{ old('metode_pembayaran', $data->metode_pembayaran) }}" readonly>
                                            @error('metode_pembayaran')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('uangkeluar.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
