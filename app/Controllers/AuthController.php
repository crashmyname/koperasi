<?php

namespace App\Controllers;

use Helpers\BaseController;
use Bpjs\Core\Request;
use Helpers\Validator;
use Helpers\View;
use Helpers\CSRFToken;

class AuthController extends BaseController
{
    // Controller logic here
    public function login(Request $request)
    {
        return view('home/home',[],'layout/app');
    }
}
