<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('layouts/auth/register');
    }
}
