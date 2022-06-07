<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Home index',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About me',
            'alamat' => [
                [
                    'type' => 'rumah',
                    'alamat' => 'Jln. abc No. 123',
                    'kota' => 'bandung'
                ],
                [
                    'type' => 'rum',
                    'alamat' => 'Jln. bunawas',
                    'kota' => 'tanggerang'
                ]
            ]
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'About me',
            'alamat' => [
                [
                    'type' => 'rumah',
                    'alamat' => 'Jln. abc No. 123',
                    'kota' => 'bandung'
                ],
                [
                    'type' => 'rum',
                    'alamat' => 'Jln. bunawas',
                    'kota' => 'tanggerang'
                ]
            ]
        ];
        echo view('pages/contact', $data);
    }
}
