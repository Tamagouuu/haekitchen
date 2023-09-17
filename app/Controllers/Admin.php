<?php

namespace App\Controllers;

use App\Models\MakananModel;
use Exception;
use JetBrains\PhpStorm\ExpectedValues;

// haekitchennibos | KODERAHASIA

class Admin extends BaseController
{
    protected $makananModel;

    public function __construct()
    {
        $this->makananModel = new MakananModel();
    }

    public function index()
    {
        $currPage = ($this->request->getVar('page_makanan') ? $this->request->getVar('page_makanan') : 1);

        $dataTampil = 4;

        if (isset($_GET['keyword'])) {
            $makanan = $this->makananModel->search($_GET['keyword']);
        } else {
            $makanan = $this->makananModel;
        }

        $data = [
            'title' => 'Hae Kitchen',
            'dataTampil' => $dataTampil,
            'currPage' => $currPage,
            // 'makanan' => $makanan,
            'makanan' => $this->makananModel->paginate($dataTampil, 'makanan'),
            'pager' => $this->makananModel->pager
        ];

        return view('admin/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail',
            'makanan' => $this->makananModel->getMakanan($slug)
        ];

        if (empty($data["makanan"])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Halaman ' . $slug . ' tidak ditemukan');
        }

        return view('admin/detail', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }


    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[makanan.nama]',
                'errors' => [
                    'required' => 'Nama produk harus diisi',
                    'is_unique' => 'Nama produk sudah ada'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi produk harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga produk harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar,jpg,jpeg,png]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar',
                    'is_image' => 'Yang diupload bukan gambar',
                    'mime_in' => 'Yang diupload bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('admin/create')->withInput();
        };

        // ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.png';
        } else {
            // nama file
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('img', $namaGambar);
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->makananModel->save([
            'nama' => strtoupper($this->request->getVar('nama')),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar
        ]);
        session()->setFlashdata('pesan', 'Data telah berhasil ditambahkan');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $makanan = $this->makananModel->find($id);

        if ($makanan["gambar"] != 'default.png') {
            unlink('img/' . $makanan["gambar"]);
        }

        $this->makananModel->delete($id);
        session()->setFlashdata('pesan', 'Data telah berhasil dihapus');
        return redirect()->to("/admin");
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit Data',
            'validation' => \Config\Services::validation(),
            'makanan' => $this->makananModel->getMakanan($slug)
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $makananLama = $this->makananModel->getMakanan($this->request->getVar("slug"));
        if ($makananLama["nama"] == $this->request->getVar("nama")) {
            $rules_makanan = 'required';
        } else {
            $rules_makanan = 'required|is_unique[makanan.nama]';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => $rules_makanan,
                'errors' => [
                    'required' => 'Nama produk harus diisi',
                    'is_unique' => 'Nama produk sudah ada'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi produk harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga produk harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar,jpg,jpeg,png]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar',
                    'is_image' => 'Yang diupload bukan gambar',
                    'mime_in' => 'Yang diupload bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('admin/edit/' . $this->request->getVar("slug"))->withInput();
        };


        $fileGambar = $this->request->getFile("gambar");

        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar("gambarLama");
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img/', $namaGambar);
            unlink('img/' . $this->request->getVar("gambarLama"));
        }

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->makananModel->save([
            'id' => $id,
            'nama' => strtoupper($this->request->getVar('nama')),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $namaGambar
        ]);
        session()->setFlashdata('pesan', 'Data telah berhasil diubah');
        return redirect()->to('/admin');
    }
}
