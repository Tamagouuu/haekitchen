<?php

namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $table      = 'makanan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'harga', 'gambar', 'deskripsi'];

    public function getMakanan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('makanan');
        // $builder->like('nama', $keyword);
        return $this->table('makanan')->like('nama', $keyword)->orLike('deskripsi', $keyword)->orLike('harga', $keyword);
    }
}
