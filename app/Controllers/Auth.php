<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    protected $ModelAuth;
    public function __construct() {
        $this->ModelAuth = new ModelAuth();
    }

    public function index()
    {
        $data = [
            'judul' => 'Login',
        ];
        return view('v_login', $data);
    }
    public function Login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!!'
                ]
            ],
            // 'level' => [
            //     'label' => 'Level',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong !!!!'
            //     ]
            // ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong !!!!'
                ]
                ],

        ])) {
            $username = $this->request->getPost('username');
            // $level = $this->request->getPost('level');
            $password = sha1($this->request->getPost('password'));
            
                $cek = $this->ModelAuth->LoginUser($username, $password);
                if($cek){
                    session()->set('nama_user', $cek['nama_user']);
                    session()->set('foto', $cek['foto']);
                    return redirect()->to('Admin');
                }else{
                    session()->setFlashdata('pesan', 'Login Gagal, Username atau Password Salah !!');
                    return redirect()->to('Auth/Index');
                }
            
        }else{
            session()->setFlashdata('pesan', 'Usename atau Password tidak boleh kosong');
            return redirect()->to('Auth/index')->withInput();
        }
    }

    public function LogOut(){
        // session()->remove('level');
        session()->remove('nama_user');
        session()->remove('password');
        return redirect()->to('Auth/index');
    }
}
