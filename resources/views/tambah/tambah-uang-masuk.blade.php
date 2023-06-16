@extends('dasboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Uang Masuk</h1>
    </div>
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('store.uangmasuk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" name="nama_masuk" class="form-control" id="nama_masuk"
                                    placeholder="Enter Nama">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Enter Deskripsi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1">Tanggal</label>
                                <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk"
                                    placeholder="Enter Tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="number" name="harga_masuk" class="form-control" id="harga_masuk"
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
