<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\SlideModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->produk   = new ProdukModel();
        $this->slide    = new SlideModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Home',
            'newP'      => $this->produk->getNewProduk(),
            'slide'     => $this->slide->getSlide()
        ];

        return view('store/index', $data);
    }
}

