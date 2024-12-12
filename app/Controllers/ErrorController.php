<?php

namespace App\Controllers;

class ErrorController extends BaseController
{
    public function index()
    {
        return view('errors/connection_failed'); // Ganti dengan nama file view Anda
    }
}
