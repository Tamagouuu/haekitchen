<?php

namespace App\Controllers;

use App\Models\MakananModel;

class Menu extends BaseController
{
    protected $makananModel;

    public function __construct()
    {
        $this->makananModel = new MakananModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $makanan = $this->makananModel->search($keyword);
        } else {
            $makanan = $this->makananModel;
        }

        $data = [
            'title' => 'Menu',
            'makanan' => $makanan->paginate(8, 'makanan'),
            'pager' => $makanan->pager
        ];
        return view('menu/index', $data);
    }
}
