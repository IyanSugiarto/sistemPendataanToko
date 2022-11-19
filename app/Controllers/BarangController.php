<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangController extends BaseController
{
    public function __construct()
    {
        $this->barang = new \App\Models\BarangModel();
    }

    public function index()
    {
        $data['databarang'] = $this->barang->find();
        // var_dump($data);
        return view('dashboard/Barang', $data);
    }

    public function create()
    {
        return view('barang/Vcreate');
    }

    public function proses()
    {
        $this->barang->insert([
            "id_barang" => $this->request->getPost('id'),
            "nama_barang" => $this->request->getPost('nama'),
            "merk" => $this->request->getPost('merk'),
            "harga_beli" => $this->request->getPost('beli'),
            "harga_jual" => $this->request->getPost('jual'),
            "satuan_barang" => $this->request->getPost('satuan'),
            "stok" => $this->request->getPost('stok'),
            "tgl_input" => $this->request->getPost('tgl')
        ]);
        return redirect()->to(base_url('Barang'));
    }

    public function details($id)
    {
        $data['databarang'] = $this->barang->find($id);
        return view('barang/Vdetail', $data);
    }

    public function edit()
    {
        $id = $this->request->getPost('id_barang');

        $this->barang->update(
            $id,
            [
                "nama_barang" => $this->request->getPost('nama'),
                "merk" => $this->request->getPost('merk'),
                "harga_beli" => $this->request->getPost('beli'),
                "harga_jual" => $this->request->getPost('jual'),
                "satuan_barang" => $this->request->getPost('satuan'),
                "stok" => $this->request->getPost('stok'),
                "tgl_input" => $this->request->getPost('tgl')
            ]
        );
        return redirect()->to(basename('Barang'));
    }

    public function delete($id)
    {
        $this->barang->delete($id);
        return redirect()->to(base_url('Barang'));
    }
}
