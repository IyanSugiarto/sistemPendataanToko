<?= $this->extend('templates/template'); ?>
<?= $this->Section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h1 class="h3 mb-2 text-gray-800">Barang</h1>
                <div class="col text-right">
                    <a class="btn btn-primary btn-sm pull-right my-1" href="">
                        <i class="fas fa-sync-alt"></i>
                        Refresh Data
                    </a>
                    <a class="btn btn-success btn-sm pull-right my-1" href="<?= base_url('Barang/create'); ?>">
                        <i class="fas fa-plus"></i>
                        Insert Data
                    </a>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th class="text-center">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($databarang as $data) : ?>
                        <tr role="row" class="even">
                            <td><?= $data['nama_barang']?></td>
                            <td><?= $data['stok']?></td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="<?= base_url('Barang/detail') . '/' . $data['id']?>">Details</a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>