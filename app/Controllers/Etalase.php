<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;

class Etalase extends BaseController
{
    public function __construct()
    {
        $this->produk = new ProdukModel();
        $this->kate = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Etalase Produk',
            'kate'      => $this->kate->getKategori(),
            'produk'    => $this->produk->getProduk()
        ];

        return view('store/etalase/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title'     => 'DetailProduk',
            'kate'      => $this->kate->getKategori(),
            'produk'    => $this->produk->getProduk($id)
        ];

        return view('store/detail/index', $data);
    }

    public function addCart()
    {
        
    }
}
