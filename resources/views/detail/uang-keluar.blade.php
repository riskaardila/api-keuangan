@extends('dasboard.layouts.main')

@section('container')
    <div class="blow">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <center><img width="250" height="250" src="/img/wallpaper.jpg"></center>
                        <h3 class="h3 mb-2 text-gray-800">
                            {{ $data->nama_barang }}
                        </h3>
                        <p class="mb-4" align="left">
                            Rp.{{ $data->harga }}
                        </p>
                        
                        <p class="mb-4" align="right">
                            {{ $data->tanggal_pembelian }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection