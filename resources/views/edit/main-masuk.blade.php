@extends('dasboard.layouts.main')

@section('container')
    <div class="container mb-4">
        <h1 class="text-center mb-4">Edit Uang Masuk</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('uangmasuk.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text"
                                    class="form-control @error('nama_masuk') is-invalid
                            @enderror"
                                    id="nama_masuk" name="nama_masuk" required autofocus
                                    value="{{ old('nama_masuk', $data->nama_masuk) }}">
                                @error('nama_masuk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <input
                                    class="form-control @error('deskripsi') is-invalid                                   
                            @enderror"
                                    name="deskripsi" id="deskripsi" rows="3" required autofocus
                                    value="{{ old('deskripsi', $data->deskripsi) }}"></textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1">Tanggal</label>
                                <input type="date" name="tanggal_masuk"
                                    class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk"
                                    required autofocus value="{{ old('tanggal_masuk', $data->tanggal_masuk) }}">
                                @error('tanggal_masuk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="number" name="harga_masuk"
                                    class="form-control @error('harga_masuk') is-invalid @enderror" id="harga_masuk"
                                    required autofocus value="{{ old('harga_masuk', $data->harga_masuk) }}">
                                @error('harga_masuk')
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
@endsection
