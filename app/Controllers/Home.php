<?php

namespace App\Controllers;

use App\Models\MakananModel;

class Home extends BaseController
{
    protected $makananModel;

    public function __construct()
    {
        $this->makananModel = new MakananModel();
    }

    public function index()
    {
        $makanan = $this->makananModel->orderBy('id', 'DESC')->limit(4)->get()->getResultArray();
        $data = [
            'title' => 'Home',
            'makanan' => $makanan,
        ];
        return view('home/index', $data);
    }
}
