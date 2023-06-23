<div class="modal fade" id="tambahUangMasukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Uang Masuk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-tambah-uang-masuk" method="POST">
                @csrf
                <input type="hidden" name="id" id="id_uangmasuk">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="form-group">
                                <label for="nama_masuk">Nama Uang Masuk</label>
                                <input type="text" name="nama_masuk" id="nama_masuk" class="form-control"
                                    placeholder="Nama Uang Masuk">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 mb-3">
                            <label for="deskripsi">deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Uang Masuk</label>
                                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <label for="harga_masuk">Harga</label>
                            <input type="number" class="form-control" name="harga_masuk" id="harga_masuk"
                                placeholder="hargaa...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" id="btnSimpanUangMasuk">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
