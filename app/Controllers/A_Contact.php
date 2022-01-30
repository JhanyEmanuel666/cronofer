<?php

namespace App\Controllers;

use App\Models\ContactModel;

class A_Contact extends BaseController
{
    public function __construct()
    {
        $this->contact = new ContactModel();
    }

    public function index()
    {
        $id = 1;

        $data = [
            'title'     => 'Contact',
            'ct'        => $this->contact->getContact($id)
        ];

        return view('admin/contact/index', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_contact');

        $data = [
            'phone'     => $this->request->getPost('phone'),
            'email'     => $this->request->getPost('email'),
            'alamat'    => $this->request->getPost('alamat'),
            'fb'        => $this->request->getPost('fb'),
            'ig'        => $this->request->getPost('ig'),
            'twt'       => $this->request->getPost('twt'),
            'ytb'       => $this->request->getPost('ytb')
        ];

        $ubah = $this->contact->updateContact($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Kontak berhasil diupdate');
            return redirect()->to(base_url('a_contact'));
        }
    }

    public function delete()
    {
        $id = $this->request->getPost('contactID');

        $hps = $this->kate->deleteContact($id);
        if($hps){
            session()->setFlashdata('success', 'Kontal berhasil dihapus');
            return redirect()->to(base_url('a_contact'));
        }
    }

}
