<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $user = [
            'id',
            'name',
            'email',
            'isLoggedIn',
        ];
        session()->destroy($user);
        session()->setFlashdata('success', 'Logout Successfully');
        return redirect()->to('/');
    }
}
