<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;

class A_Produk extends BaseController
{
    public function __construct()
    {
        $this->produk = new ProdukModel();
        $this->kate = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Produk',
            'kode'      => $this->produk->getKodeProduk(),
            'produk'    => $this->produk->getAllProduk(),
            'kate'      => $this->kate->getKategori()
        ];

        return view('admin/produk/index', $data);
    }

    public function save()
    {
        $image  = $this->request->getFile('img_produk');
        $name   = $image->getRandomName();

        $data = [
            'id_kategori' => $this->request->getPost('id_kategori'),
            'kode_produk' => $this->request->getPost('kode_produk'),
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga_produk' => $this->request->getPost('harga_produk'),
            'warna_produk' => $this->request->getPost('warna_produk'),
            'img_produk' => $name,
            'deskripsi_produk' => $this->request->getPost('des_produk')
        ];

        $image->move(ROOTPATH . 'public/uploads/produk_image', $name);

        $simpan = $this->produk->insertProduk($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data produk berhasil ditambahkan');
            return redirect()->to(base_url('a_produk'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'Edit produkgori',
            'prdk'      => $this->produk->getProduk($id)
        ];

        return view('admin/produk/index', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_produk');

        $data = [
            'nama_produk'   => $this->request->getPost('nama_produk'),
            'warna_produk' => $this->request->getPost('warna_produk'),
            'harga_produk'  => $this->request->getPost('harga_produk'),
            'deskripsi_produk' => $this->request->getPost('des_produk')
        ];

        $ubah = $this->produk->updateProduk($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data produk berhasil terupdate');
            return redirect()->to(base_url('a_produk'));
        }
    }

    public function delete()
    {
        $id = $this->request->getPost('produkgoriID');

        $hps = $this->produk->deleteprodukgori($id);
        if($hps){
            session()->setFlashdata('success', 'Data produk berhasil dihapus');
            return redirect()->to(base_url('a_produk'));
        }
    }

}
