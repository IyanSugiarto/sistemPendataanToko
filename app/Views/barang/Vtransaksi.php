<?= $this->extend('templates/template'); ?>
<?= $this->Section('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h3 style="margin-left:20px ;">Keranjang Penjualan</h3>
        <!-- row 1 -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card m-3">
                    <div class="card-header text-white bg-primary ">
                        <i class="fa fa-search"></i>Cari Barang
                    </div>
                    <div class="card-body">
                        <input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan : Kode / Nama Barang  [ENTER]">
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card m-3">
                    <div class="card-header text-white bg-primary ">
                        <i class="fa fa-list"></i> Hasil Pencarian
                    </div>
                    <div class="card-body">
                        <div id="hasil_cari">
                            <table class="table width="100" id="example">
                                <tbody>
                                    <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <!-- <th>Merk</th> -->
                                        <th>Harga Jual</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td>BR001</td>
                                        <td>Batako</td>
                                        <!-- <td>Matrial</td> -->
                                        <td>4000</td>
                                        <td>
                                            <a href="" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-3">
                    <div class="card-header text-white bg-primary d-flex justify-content-between">
                        <div class="kasir text-20">
                            <dt>
                                <i class="fa fa-shopping-cart"></i>
                                KASIR
                            </dt>
                        </div>
                        <a class="btn btn-danger m-1" style="margin-top:-0.5pc;" href="">
                            <b>RESET KERANJANG</b>
                        </a>
                    </div>
                    <div class="card-body">
                        asasas
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="col-lg-12 mx-auto py-auto">
        <h3 style="margin-left: 30px ;">Keranjang Penjualan</h3>
        <div class="row m-3">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4><i class="fa fa-search"></i> Cari Barang</h4>
                        </div>
                        <div class="card-body">
                            <input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan : Kode / Nama Barang  [ENTER]">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4><i class="fa fa-list"></i> Hasil Pencarian</h4>
                    </div>
                    <div class="card-body">
                        <div id="hasil_cari">
                            <table class="table table-stripped" width="100%" id="example">
                                <tbody>
                                    <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Harga Jual</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td>BR001</td>
                                        <td>Batako</td>
                                        <td>Matrial</td>
                                        <td>4000</td>
                                        <td>
                                            <a href="fungsi/tambah/tambah.php?jual=jual&amp;id=BR001&amp;id_kasir=1" class="btn btn-success">
                                                <i class="fa fa-shopping-cart"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tunggu"></div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4><i class="fa fa-shopping-cart"></i> KASIR
                        <a class="btn btn-danger pull-right" onclick="javascript:return confirm('Apakah anda ingin reset keranjang ?');" style="margin-top:-0.5pc;" href="fungsi/hapus/hapus.php?penjualan=jual">
                            <b>RESET KERANJANG</b></a>
                    </h4>
                </div>
                <div class="card-body">
                    <div id="keranjang">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><b>Tanggal</b></td>
                                    <td><input type="text" readonly="readonly" class="form-control" value="11 November 2022, 0:55" name="tgl"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info" style="width: 1064px;">
                                        <thead>
                                            <tr role="row">
                                                <td class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" No: activate to sort column descending" style="width: 98px;"> No</td>
                                                <td class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Nama Barang: activate to sort column ascending" style="width: 314px;"> Nama Barang</td>
                                                <td style="width: 89px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Jumlah: activate to sort column ascending"> Jumlah</td>
                                                <td style="width: 195px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Total: activate to sort column ascending"> Total</td>
                                                <td class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Kasir: activate to sort column ascending" style="width: 142px;"> Kasir</td>
                                                <td class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Aksi: activate to sort column ascending" style="width: 122px;"> Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li>
                                            <li class="paginate_button next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div id="kasirnya">
                            <table class="table table-stripped">
                                <!-- aksi ke table nota -->
    <!-- <form method="POST" action="index.php?page=jual&amp;nota=yes#kasirnya"></form>
    <tbody>
        <tr>
            <td>Total Semua </td>
            <td><input type="text" class="form-control" name="total" value="0"></td>

            <td>Bayar </td>
            <td><input type="text" class="form-control" name="bayar" value=""></td>
            <td><button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</button>
            </td>
        </tr>

        aksi ke table nota -->
    <!-- <tr>
            <td>Kembali</td>
            <td><input type="text" class="form-control" value=""></td>
            <td></td>
            <td>
                <a href="print.php?nm_member=Iyan Sugiarto													&amp;bayar=&amp;kembali=" target="_blank">
                    <button class="btn btn-default">
                        <i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
                    </button></a>
            </td>

        </tr>
    </tbody>
    </table>
    <br>
    <br> -->
</div>


<?= $this->endSection(); ?>