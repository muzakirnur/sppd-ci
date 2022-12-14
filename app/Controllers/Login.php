<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use Config\Services;

class Login extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new User;
    }
    public function index()
    {
        $data = [
            'title' => "Login Now",
            'validation' => Services::validation(),
        ];
        if ($this->auth == true) {
            session()->setFlashdata('error', 'U Already Logged In');
            return redirect()->to('/');
        }
        return view('auth/login', $data);
    }

    public function login()
    {
        // Mendefinisikan Email dan Password dari Request
        $emailRequest = $this->request->getVar('username');
        $passRequest = $this->request->getVar('password');

        // Get User Data
        $userData = $this->userModel->where('username', $emailRequest)->first();

        // Check if Data Exist
        if (!$userData == null) {
            // Checking the Password Value
            $authPassword = password_verify($passRequest, $userData['password']);
            if ($authPassword == true) {
                // Make Session Login
                $user = [
                    'id' => $userData['id'],
                    'name' => $userData['name'],
                    'username' => $userData['username'],
                    'isLoggedIn' => TRUE,
                ];
                session()->set($user);
                return redirect()->to('/dashboard')->with('success', 'Login Successfully');
            } else {
                session()->setFlashdata('error', 'The credential is incorrect');
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('error', 'The Username doesnt exist');
            return redirect()->back()->withInput();
        }
    }
}
