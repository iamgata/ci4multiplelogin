<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title'     => 'Halaman Beranda'
        ];

        return view('pages/v_home', $data);
    }

    public function profile()
    {
        $data = [
            'title'     => 'Halaman Profile'
        ];

        return view('pages/v_profile', $data);
    }
}
