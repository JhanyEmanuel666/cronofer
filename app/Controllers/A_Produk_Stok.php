<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\ProdukStokModel;

class A_Produk_Stok extends BaseController
{
    public function __construct()
    {
        $this->stok= new ProdukStokModel();
        $this->produk = new ProdukModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Stok Produk',
            'produk'    => $this->produk->getAllProduk(),
            'stok'      => $this->stok->getStok()
        ];

        return view('admin/produk_stok/index', $data);
    }

    public function save()
    {

        $data = [
            'id_produk' => $this->request->getPost('id_produk'),
            'size_s' => $this->request->getPost('size_s'),
            'size_m' => $this->request->getPost('size_m'),
            'size_l' => $this->request->getPost('size_l'),
            'size_xl' => $this->request->getPost('size_xl'),
            'size_xxl' => $this->request->getPost('size_xxl'),
            'total_stok' => $this->request->getPost('total_stok')
        ];

        $simpan = $this->stok->insertStok($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data stok produk berhasil ditambahkan');
            return redirect()->to(base_url('a_produk_stok'));
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id_produk');

        $data = [
            'size_s' => $this->request->getPost('size_s'),
            'size_m' => $this->request->getPost('size_m'),
            'size_l' => $this->request->getPost('size_l'),
            'size_xl' => $this->request->getPost('size_xl'),
            'size_xxl' => $this->request->getPost('size_xxl'),
            'total_stok' => $this->request->getPost('total_stok')
        ];

        $ubah = $this->stok->updateStok($data, $id);

        if ($ubah) {
            session()->setFlashdata('info', 'Data stok produk berhasil terupdate');
            return redirect()->to(base_url('a_produk_stok'));
        }
    }

    public function delete()
    {
        $id = $this->request->getPost('produkID');

        $hps = $this->stok->deleteStok($id);
        if($hps){
            session()->setFlashdata('success', 'Data stok produk berhasil dihapus');
            return redirect()->to(base_url('a_produkgori'));
        }
    }

}
