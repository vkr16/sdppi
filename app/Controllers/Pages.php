<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('beranda');
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function datapos()
    {
        return view('data-pos');
    }

    public function datatelekomunikasi()
    {
        return view('data-telekomunikasi');
    }

    public function datapenyiaran()
    {
        return view('data-penyiaran');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function faq()
    {
        return view('faq');
    }
}
