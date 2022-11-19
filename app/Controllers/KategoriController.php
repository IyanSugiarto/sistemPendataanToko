<?php

    namespace App\Controllers;
    use App\Controllers\BaseController;

    class KategoriController extends BaseController
    {
        public function __construct()
        {
            $this->kategori = new \App\Models\BarangModel();
        }

        public function index()
        {
            return view('dashboard/Kategori');
        }

    }

    

?>