<?php

namespace App\Controllers;

use App\Models\SlideModel;

class A_Slide extends BaseController
{
    public function __construct()
    {
        $this->slide = new SlideModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Slide Toko',
            'slide'        => $this->slide->getSlide()
        ];

        return view('admin/slide/index', $data);
    }

    public function save()
    {
        $image  = $this->request->getFile('img_slide');
        $name   = $image->getRandomName();

        $data = [
            'img_slide' => $name
        ];

        $image->move(ROOTPATH . 'public/Uploads/slide', $name);

        $simpan = $this->slide->insertSlide($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data slide berhasil ditambahkan');
            return redirect()->to(base_url('a_slide'));
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id_slide');

        $data = [
            'nama_slidegori' => $this->request->getPost('nama_slide'),
        ];

        $ubah = $this->slide->updateslidegori($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data slidegori berhasil terupdate');
            return redirect()->to(base_url('a_slidegori'));
        }
    }

    public function delete()
    {
        $id = $this->request->getPost('slideID');

        $hps = $this->slide->deleteSlide($id);
        if($hps){
            session()->setFlashdata('success', 'Data slidegori berhasil dihapus');
            return redirect()->to(base_url('a_slide'));
        }
    }

}
