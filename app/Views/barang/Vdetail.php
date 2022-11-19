<?= $this->extend('templates/template'); ?>
<?= $this->Section('content'); ?>

<div class="container">
    <form method="post" action=" <?= base_url('Barang/edit')?>">
        <div class="form-group row">
            <label for="detailID" class="col-sm-2 col-form-label">ID Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="detailID" value="<?= $databarang['id_barang'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="detailKategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="custom-select mr-sm-2" id="inlineKategori">
                    <option selected>Choose...</option>
                    <option value="1">Adventure</option>
                    <option value="2">Releax</option>
                    <option value="3">Sport</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="detailNamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="detailNamaBarang" name="nama" value="<?= $databarang['nama_barang'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="detailMerk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="detailMerk" name="merk" value="<?= $databarang['merk'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="detailStok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="Number" class="form-control" id="detailStok" name="stok" value="<?= $databarang['stok'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="detailHargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="detailHargaBeli" name="beli" value="<?= $databarang['harga_beli'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="detailHargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="detailHargaJual" name="jual" value="<?= $databarang['harga_jual'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="detailNamaBarang" class="col-sm-2 col-form-label">PCS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="detailHargaJual" name="satuan" value="<?= $databarang['satuan_barang'] ?>">
            </div>
        </div>
        <div class="text-right">
            <div class="row w100">
                <div class="col-12 mt-3">
                    <input type="text" name="id_barang" value="<?= $databarang['id']?>" hidden>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn btn-danger" href="<?= base_url('detail/delete') . '/' . $databarang['id'] ?>">Delete</a>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>