<?php

namespace App\Controllers;

class Member extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Halaman Member'
        ];

        return view('member/v_index', $data);
    }
}
