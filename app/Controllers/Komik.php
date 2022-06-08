<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{

    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'komik',
            'komik' => $komik
        ];

        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }

        // konek DB dengan model
        // $komikModel = new \App\Models\KomikModel();
        // $komikModel = new KomikModel(); //buatkan namespace
        // $komik = $this->komikModel->findAll();
        // dd($komik);



        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->komikModel->where(['slug' => $slug])->first();
    }
}
