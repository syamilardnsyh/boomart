<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function pendaftaran()
    {
        return view('page.daftar');
    }

    public function selamat(Request $request)
    {
        $fullname = $request->input('fname');
        $lastname = $request->input('lname');

        return view('page.selamat', ['fullname' => $fullname, 'lastname' => $lastname]);
    }
}
