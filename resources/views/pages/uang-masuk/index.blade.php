@extends('layouts.app')

@section('title', 'Uang Masuk')

@section('content')
    <section class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h3 class="card-title">Data Uang Masuk</h3>
                                <a href="javascript:void(0)" class="btn btn-primary" onclick="tambahUangMasuk()"> <i
                                        class="fas fa-plus"></i>&nbsp;
                                    Tambah Uang Masuk</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="uang_masuks" class="table table-hover scroll-horizontal-vertical w-100">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
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
    @include('pages.uang-masuk.modal-uang-masuk')
@endsection

@push('after-scripts')
    <script>
        // tambah perlombaan
        function tambahUangMasuk() {
            $('#tambahUangMasukModal').modal('show');
            $('#form-tambah-uang-masuk').trigger('reset');
            $('.modal-title').text('Tambah Uang Masuk');
            $('#btnSimpanUangMasuk').html('Simpan');
            $('#id_uangmasuk').val('');
        }

        function btnShowUangMasuk(id) {
            $('#showUangMasukModal').modal('show');
            $('.modal-title').text('Detail Uang Masuk');
            $('#id_uangmasuk').val(id);

            $.ajax({
                type: 'POST',
                url: "{{ url()->current() }}",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: (res) => {
                    $('#show_nama_masuk').val(res.nama_masuk);
                    $('#show_deskripsi').val(res.deskripsi);
                    $('#show_tanggal_masuk').val(res.tanggal_masuk).format('YYYY.MM.DD');
                    $('#show_harga_masuk').val(res.harga_masuk);
                },
            });
        }

        function btnDeleteUangMasuk(id) {
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
                        url: "{{ url('/hapus') }}",
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
                            $('#uang_masuks').DataTable().ajax.reload();
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

        $('#form-tambah-uang-masuk').submit(function(e) {
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
                    $('#btnSimpanUangMasuk').html('<i class="fa fa-spin fa-spinner"></i> Processing');
                    $('#btnSimpanUangMasuk').attr('disabled', true);
                },
                success: function(res) {
                    $('#btnSimpanUangMasuk').attr('disabled', false);
                    $("#uang_masuks").DataTable().ajax.reload();
                    $('#tambahUangMasukModal').modal('hide');
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

        $('#uang_masuks').DataTable({
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
                    data: 'nama_masuk',
                    name: 'nama_masuk'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi'
                },
                {
                    data: 'tanggal_masuk',
                    name: 'tanggal_masuk'
                },
                {
                    data: 'harga_masuk',
                    name: 'harga_masuk'
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
