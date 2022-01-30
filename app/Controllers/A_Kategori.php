<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class A_Kategori extends BaseController
{
    public function __construct()
    {
        $this->kate = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Kategori Produk',
            'kate'      => $this->kate->getKategori()
        ];

        return view('admin/kategori/index', $data);
    }

    public function save()
    {
        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ];

        $simpan = $this->kate->insertKategori($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data kategori berhasil ditambahkan');
            return redirect()->to(base_url('a_kategori'));
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id_kategori');

        $data = [
            'nama_kategori' => $this->request->getPost('nama_kategori'),
        ];

        $ubah = $this->kate->updateKategori($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data kategori berhasil terupdate');
            return redirect()->to(base_url('a_kategori'));
        }
    }

    public function delete()
    {
        $id = $this->request->getPost('kategoriID');

        $hps = $this->kate->deleteKategori($id);
        if($hps){
            session()->setFlashdata('success', 'Data kategori berhasil dihapus');
            return redirect()->to(base_url('a_kategori'));
        }
    }

}
