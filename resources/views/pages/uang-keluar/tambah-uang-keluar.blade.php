<div class="modal fade" id="tambahUangKeluarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Uang Pengeluaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="form-tambah-uang-Keluar" method="POST">
                @csrf
                <input type="hidden" name="id" id="id_uangkeluar">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang Keluaran</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control"
                                    placeholder="Nama Barang Keluaran">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori :
                            </label>
                            <select class="custom-select my-1 mr-sm-2 form-select" id="kategori_id" name="kategori_id">
                                <option selected>Choose...</option>
                                <option value="1">Belanja Umum</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Metode Pembayaran :
                            </label>
                            <select class="custom-select my-1 mr-sm-2 form-select" id="metode_pembayaran" name="metode_pembayaran">
                                <option selected>Choose...</option>
                                <option value="Tunai">Tunai</option>
                                <option value="Transfer">Transfer</option>
                                <option value="Dana">Dana</option>
                                <option value="GoPay">GoPay</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Uang Keluar</label>
                                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-3">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga"
                                placeholder="hargaa...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" id="btnSimpanUangKeluar">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
