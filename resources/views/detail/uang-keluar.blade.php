@extends('pages.dashboard')

@section('title', 'Detail')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Detail</h3>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                    <center><img width="250" height="250" style="border-radius: 12%"
                                            src="/img/picture.jpg"></center>
                                    <h3 class="h3 mb-2 text-gray-800">
                                        {{ $data->nama_barang }}
                                    </h3>
                                    <p class="mb-4">
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
            </div>
        </div>
    </section>
@endsection
