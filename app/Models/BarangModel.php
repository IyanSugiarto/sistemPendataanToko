<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    
    protected $useAutoIncreament = true;
    protected $allowedFields = ['id', 'id_barang', 'id_kategori', 'nama_barang', 'merk', 'harga_beli', 'harga_jual', 'satuan_barang', 'stok', 'tgl_input', 'tgl_update'];
}