<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function pos()
    {
        return view('admin/pos');
    }

    public function telekomunikasi()
    {
        return view('admin/telekomunikasi');
    }

    public function penyiaran()
    {
        return view('admin/penyiaran');
    }
}
