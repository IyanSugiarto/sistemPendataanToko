<?= $this->extend('templates/template'); ?>
<?= $this->Section('content'); ?>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <form method="POST" action="">
                        <table>
                            <tbody>
                                <tr>
                                    <td style="width:15pc;">
                                        <input type="text" class="form-control" required="" name="kategori" placeholder="Masukan Kategori Barang Baru">
                                    </td>
                                    <td style="padding-left:10px;">
                                        <button id="tombol-simpan" class="btn btn-primary">
                                            <i class="fa fa-plus"></i> 
                                            Insert Data
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Tanggal Input</th>
                            <th class="text-center">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="even">
                            <td class="sorting_1">1</td>
                            <td class="">Adventure</td>
                            <td>29 April 2015</td>
                            <td>
                                <a href=""><button class="btn btn-warning btn-sm">Edit</button></a>
                                <a href="" onclick="javascript:return confirm('Hapus Data barang ?');"><button class="btn btn-danger btn-sm">Hapus</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>