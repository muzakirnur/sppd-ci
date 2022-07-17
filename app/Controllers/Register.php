<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use Config\Services;

class Register extends BaseController
{

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new  User;
    }
    public function index()
    {
        $data = [
            'title' => "Register Now",
            'validation' => Services::validation(),
        ];
        if ($this->auth == true) {
            session()->setFlashdata('error', 'You already Logged In');
            return redirect()->back();
        }
        return view('auth/register', $data);
    }

    public function register()
    {
        // Validation Forms

        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[5]',
            'password_confirmation' => 'required|matches[password]'
        ])) {
            $validation = Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);
        session()->setFlashdata('success', 'Registrasi berhasil, Silahkan Login');
        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }
}
