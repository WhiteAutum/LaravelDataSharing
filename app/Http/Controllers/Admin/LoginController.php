<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;


class LoginController extends CommonController
{
    //
    public function login()
    {
        return View('Auth/login');
    }
}
