@extends('pages.dashboard')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Edit Uang Masuk</h3>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="/edit/{{ $data->id }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Nama</label>
                                                <input type="text"
                                                    class="form-control @error('nama_barang') is-invalid
                                            @enderror"
                                                    id="nama_barang" name="nama_barang" required autofocus
                                                    value="{{ old('nama_barang', $data->nama_barang) }}">
                                                @error('nama_barang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Metode</label>
                                                <input type="text"
                                                    class="form-control @error('metode_pembayaran') is-invalid
                                            @enderror"
                                                    id="metode-pembayaran" name="metode_pembayaran" required autofocus
                                                    value="{{ old('metode_pembayaran', $data->metode_pembayaran) }}">
                                                @error('metode_pembayaran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1">Tanggal</label>
                                                <input type="date" name="tanggal_pembelian"
                                                    class="form-control @error('tanggalpembelian') is-invalid @enderror"
                                                    id="tanggal_pembelian" required autofocus
                                                    value="{{ old('tanggal_pembelian', $data->tanggal_pembelian) }}">
                                                @error('tanggal_pembelian')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1">Harga</label>
                                                <input type="number" name="harga"
                                                    class="form-control @error('harga') is-invalid @enderror" id="harga"
                                                    required autofocus value="{{ old('harga_masuk', $data->harga) }}">
                                                @error('harga')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
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
