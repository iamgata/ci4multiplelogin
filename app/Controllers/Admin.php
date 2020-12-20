<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Halaman Admin'
        ];

        return view('admin/v_index', $data);
    }
}
