<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik'; //harus sama dengan nama table di DB
    protected $useTimestamps = true;

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->komikModel->where(['slug' => $slug])->first();
    }
}
