<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judulHalaman' => 'Home | Web Coba'
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'judulHalaman' => 'About | Web Coba'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'judulHalaman' => 'Contact | Web Coba',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jln berdua',
                    'kota' => 'adalah..'
                ],
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jln an sepi',
                    'kota' => 'adalah,,'
                ]
            ]
        ];
        echo view('pages/contact', $data);
    }
}
