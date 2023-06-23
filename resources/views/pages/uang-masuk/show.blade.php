@extends('layouts.app')

@section('title', 'Detail Uang Masuk')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Detail Uang Masuk</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="nama_masuk">Nama Uang Masuk</label>
                                        <input type="text" name="nama_masuk" id="nama_masuk" class="form-control"
                                            placeholder="Nama Uang Masuk" value="{{ $data->nama_masuk }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-12 mb-3">
                                    <label for="deskripsi">deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" readonly> {{ $data->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="tanggal_masuk">Tanggal Uang Masuk</label>
                                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{ $data->tanggal_masuk }}" readonly>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-3">
                                    <label for="harga_masuk">Harga</label>
                                    <input type="number" class="form-control" name="harga_masuk" id="harga_masuk"
                                        placeholder="hargaa..." value="{{ $data->harga_masuk }}" readonly>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('uangmasuk.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
