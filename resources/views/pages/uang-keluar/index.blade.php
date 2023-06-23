@extends('layouts.app')

@section('title', 'Uang Keluar')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Data Uang Keluar</h3>
                                <a href="javascript:void(0)" class="btn btn-primary" onclick="tambahUangKeluar()"> <i
                                        class="fas fa-plus"></i>&nbsp;
                                    Tambah Uang Keluar</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="uang_keluars" class="table table-hover scroll-horizontal-vertical w-100">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Metode</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.uang-keluar.tambah-uang-keluar')
@endsection

@push('after-scripts')
    <script>
        // tambah perlombaan
        function tambahUangKeluar() {
            $('#tambahUangKeluarModal').modal('show');
            $('#form-tambah-uang-keluar').trigger('reset');
            $('.modal-title').text('Tambah Uang Keluar');
            $('#btnSimpanUangkeluar').html('Simpan');
            $('#id_uangkeluar').val('');
        }

        function btnDeleteUangKeluar(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ url('/delete') }}",
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        dataType: 'json',
                        success: (res) => {
                            Swal.fire(
                                'Berhasil!',
                                'Data berhasil dihapus.',
                                'success'
                            )
                            $('#uang_keluars').DataTable().ajax.reload();
                        },
                        error: (err) => {
                            Swal.fire(
                                'Gagal!',
                                'Data gagal dihapus.',
                                'error'
                            )
                        }
                    });
                }
            })
        }

        $('#form-tambah-uang-keluar').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "{{ url()->current() }}",
                data: formData,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $(".preloader").fadeIn();
                    $('#btnSimpanUangKeluar').html('<i class="fa fa-spin fa-spinner"></i> Processing');
                    $('#btnSimpanUangKeluar').attr('disabled', true);
                },
                success: function(res) {
                    $('#btnSimpanUangKeluar').attr('disabled', false);
                    $("#uang_keluars").DataTable().ajax.reload();
                    $('#tambahUangKeluarModal').modal('hide');
                    Swal.fire(
                        'Berhasil!',
                        res.message,
                        'success'
                    );
                },
                complete: function() {
                    $(".preloader").fadeOut();
                }
            })
        });


        $('#uang_keluars').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            dom: 'lBfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [{
                    extend: 'copy',
                    text: 'Copy',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
                    }
                },
                {
                    extend: 'csv',
                    text: 'CSV',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
                    }
                },
                {
                    extend: 'excel',
                    text: 'Excel',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
                    }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
                    }
                },
                {
                    extend: 'print',
                    text: 'Print',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [1, 2, 3, 4]
                    }
                }
            ],
            ordering: [
                [1, 'asc']
            ],
            ajax: {
                url: "{{ url()->current() }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id'
                },
                {
                    data: 'nama_barang',
                    name: 'nama_barang'
                },
                {
                    data: 'harga',
                    name: 'harga'
                },
                {
                    data: 'metode_pembayaran',
                    name: 'metode_pembayaran'
                },
                {
                    data: 'tanggal_pembelian',
                    name: 'tanggal_pembelian'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
        });
    </script>
@endpush
