<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRequestController extends Controller
{
    public function login()
    {
        return view('page.login');
    }
}
