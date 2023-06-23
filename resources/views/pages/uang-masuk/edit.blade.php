@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Uang Masuk</h4>
                        </div>
                        <form action="{{ route('uangmasuk.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-16 col-lg-4">
                                        <div class="form-group">
                                            <label for="nama_masuk">Nama</label>
                                            <input type="text" name="nama_masuk" id="nama_masuk" class="form-control"
                                                value="{{ $data->nama_masuk }}" required>
                                        </div>
                                    </div>
                                    <div class="col-16 col-lg-4">
                                        <div class="form-group">
                                            <label for="harga_masuk">Harga</label>
                                            <input type="number" name="harga_masuk" id="harga_masuk" class="form-control"
                                                value="{{ $data->harga_masuk }}" required>
                                        </div>
                                    </div>
                                    <div class="col-16 col-lg-4">
                                        <div class="form-group">
                                            <label for="tanggal_masuk">Tanggal</label>
                                            <input type="date" name="tanggal_masuk" id="tanggal_masuk"
                                                class="form-control" value="{{ $data->tanggal_masuk }}" required>
                                        </div>
                                    </div>
                                    <div class="col-15 col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <input class="form-control @error('deskripsi') is-invalid @enderror"
                                                name="deskripsi" id="deskripsi" rows="3" required autofocus
                                                value="{{ old('deskripsi', $data->deskripsi) }}"></textarea>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('uangmasuk.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
