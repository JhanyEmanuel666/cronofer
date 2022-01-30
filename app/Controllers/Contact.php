<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\MessageModel;

class Contact extends BaseController
{
    public function __construct()
    {
        $this->contact = new ContactModel();
        $this->message = new MessageModel();
    }

    public function index()
    {
        $id = 1;

        $data = [
            'title' => 'Contact Us',
            'ct'    => $this->contact->getContact($id)
        ];

        return view('store/contact/index', $data);
    }

    public function sendMessage()
    {
        $data = [
            'fullname'      => $this->request->getPost('fullname'),
            'email'         => $this->request->getPost('email'),
            'subject'       => $this->request->getPost('subject'),
            'message_text'  => $this->request->getPost('message')
        ];

        $simpan = $this->message->insertMessage($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Terima kasih. Pesan Anda Telah Terkirim.');
            return redirect()->to(base_url('contact'));
        }
    }

}
