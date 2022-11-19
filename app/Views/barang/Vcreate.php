<?= $this->extend('templates/template') ?>
<?= $this->Section('content'); ?>

<div class="row">
    <div class="col-lg">
        <div class="card-content" style=" border-radius:0px;">
            <div class="card-header" style="background:#285c64;color:#fff;">
                <h4 class="card-title">
                    <i class="fa fa-plus"></i>
                    Tambah Barang
                </h4>
            </div>
            <form action="<?= base_url('Barang/proses') ?>" method="POST">
                <div class="card-body">
                    <table class="table table-striped bordered">
                        <tbody>
                            <tr>
                                <td>ID Barang</td>
                                <td>
                                    <input type="text" readonly="readonly" required="" value="BR004" class="form-control" name="id">
                                </td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>
                                    <select name="kategori" class="form-control" required="">
                                        <option value="#">Pilih Kategori</option>
                                        <option value="10">batako</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Barang</td>
                                <td><input type="text" placeholder="Nama Barang" required="" class="form-control" name="nama"></td>
                            </tr>
                            <tr>
                                <td>Merk Barang</td>
                                <td><input type="text" placeholder="Merk Barang" required="" class="form-control" name="merk"></td>
                            </tr>
                            <tr>
                                <td>Harga Beli</td>
                                <td><input type="number" placeholder="Harga beli" required="" class="form-control" name="beli"></td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td><input type="number" placeholder="Harga Jual" required="" class="form-control" name="jual"></td>
                            </tr>
                            <tr>
                                <td>Satuan Barang</td>
                                <td>
                                    <select name="satuan" class="form-control" required="">
                                        <option value="#">Pilih Satuan</option>
                                        <option value="PCS">PCS</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><input type="number" required="" placeholder="Stok" class="form-control" name="stok"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Input</td>
                                <td><input type="text" required="" readonly="readonly" class="form-control" value="11 November 2022, 0:29" name="tgl"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right m-3">
                    <button type="submit" class="btn btn-primary mx-2">
                        <i class="fa fa-plus"></i>
                        Insert Data
                    </button>
                    <button type="button" class="btn btn-default">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>