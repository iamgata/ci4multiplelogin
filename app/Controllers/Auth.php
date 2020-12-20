<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Config\Config;

class Auth extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        $data = [
            'title'         => 'Form Register',
            'validation'    => \Config\Services::validation()
        ];

        return view('auth/v_register', $data);
    }

    public function registersave()
    {
        $valid = $this->validate([
            'name_user'     => [
                'label'     => 'Inputan user',
                'rules'     => 'required',
                'errors'    => [
                    'required'      => '{field} harus diisi'
                ]
            ],
            'email_user'    => [
                'label'     => 'Inputan email',
                'rules'     => 'required|valid_email',
                'errors'    => [
                    'required'      => '{field} harus diisi',
                    'valid_email'   => '{field} harus sudah terdaftar'
                ]
            ],
            'password_user'     => [
                'label'     => 'Inputan password',
                'rules'     => 'required|min_length[8]|max_length[64]',
                'errors'    => [
                    'required'      => '{field} harus diisi',
                    'min_length'    => '{field} harus berisi minimal 8 karakter',
                    'max_length'    => '{field} harus berisi maksimal 64 karakter'
                ]
            ],
            'repassword_user'   => [
                'label'     => 'Ulangi password',
                'rules'     => 'required|matches[password_user]',
                'errors'    => [
                    'required'      => '{field} harus diisi',
                    'matches'       => '{field} harus sesuai'
                ]
            ],
            'level_user'    => [
                'label'     => 'Inputan level',
                'rules'     => 'required',
                'errors'    => [
                    'required'      => '{field} harus diisi'
                ]
            ]
        ]);

        if (!$valid) {
            return redirect()->to('/auth/register')->withInput();
        };

        $datainsert = [
            'name_user'     => $this->request->getVar('name_user'),
            'email_user'    => $this->request->getVar('email_user'),
            'password_user' => password_hash($this->request->getVar('password_user'), PASSWORD_DEFAULT),
            'level_user'    => $this->request->getVar('level_user'),
            'image_user'     => $this->request->getVar('image_user'),
        ];

        $this->userModel->insertUser($datainsert);

        session()->setFlashdata('messageregister', 'berhasil');
        return redirect()->to('/auth/register');
    }

    public function login()
    {
        $data = [
            'title'         => 'Form Login',
            'validation'    => \Config\Services::validation()
        ];

        return view('auth/v_login', $data);
    }

    public function loginsave()
    {
        $email = $this->request->getVar('email_user');
        $password = $this->request->getVar('password_user');

        $data = $this->userModel->where('email_user', $email)->first();

        if ($data) {
            $pass_verify = password_verify($password, $data['password_user']);

            if ($pass_verify) {
                $sessionData = [
                    'id'        => $data['id_user'],
                    'name'      => $data['name_user'],
                    'email'     => $data['email_user'],
                    'password'  => $data['password_user'],
                    'level'     => $data['level_user'],
                    'image'     => $data['image_user'],
                    'login'     => true
                ];

                session()->set($sessionData);

                session()->setFlashdata('messagesuccesslogin', 'berhasil');
                return redirect()->to('/pages/home');
            } else {
                session()->setFlashdata('messagewrongpassword', 'salah');
                return redirect()->to('/auth/login');
            }
        } else {
            session()->setFlashdata('messagewrongemail', 'salah');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
