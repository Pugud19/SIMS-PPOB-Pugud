<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function topUp(): string
    {
        return view('topup');
    }
    public function akun(): string
    {
        return view('akun');
    }
}
